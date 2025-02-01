<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PropertyType;
use App\Models\Amenities;


class PropertyTypeController extends Controller
{
    //

    public function AllType()
    {
        $types = PropertyType::latest()->get();
        return view('backend.type.all_type', compact('types'));
    }

    public function AddType()
    {
        return view('backend.type.add_type');
    } //End method

    public function StoreType(Request $request)
    {
        $request->validate([
            'type_name' => 'required|unique:property_types|max:200',
            'type_icon' => 'required'
        ]);

        PropertyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon
        ]);

        $notification = [
            'message' => 'Property Type Created Successfully',
            'alert-type' => 'Success'
        ];
        return redirect()->route('add.type')->with($notification);
    } //End method

    public function EditType($id)
    {
        $types = PropertyType::findOrFail($id);
        return view('backend.type.edit_type', compact('types'));
    }


    public function UpdateType(Request $request)
    {
        $request->validate([
            'type_name' => 'required|unique:property_types|max:200',
            'type_icon' => 'required'
        ]);

        PropertyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon
        ]);

        $notification = [
            'message' => 'Property Type Updated Successfully',
            'alert-type' => 'Success'
        ];
        return redirect()->route('add.type')->with($notification);
    } //End method

    public function DeleteType($id){
        
       PropertyType::findOrFail($id)->delete();

         $notification = [
            'message' => 'Property Type Deleted Successfully',
            'alert-type' => 'Success'
        ];

        return redirect()->back()->with($notification);
    }

    //ALL AMENITIES

    public function AllAmenitie()  
    {  
        // Corrected variable name from 'types' to 'amenities'  
        $amenities = Amenities::latest()->get();  
        return view('backend.amenities.all_amenities', compact('amenities'));  
    } 

    public function AddAmenities()
    {
        return view('backend.amenities.add_amenities');
    } //End method


    public function StoreAmenitie(Request $request)
    {
    
        Amenities::insert([
            'amenities_name' => $request->amenities_name,
        ]);

        $notification = [
            'message' => 'Amenities Created Successfully',
            'alert-type' => 'Success'
        ];
        return redirect()->route('add.amenities')->with($notification);
    } //End method


    public function EditAmenities($id)
    {
        $amenities = Amenities::findOrFail($id);
        return view('backend.amenities.edit_amenities', compact('amenities'));
    }


    public function UpdateAmenitie(Request $request)
    {
    
        $ame_id = $request->id;
        Amenities::findOrFail($ame_id)->update([
            'amenities_name' => $request->amenities_name,
        ]);

        $notification = [
            'message' => 'Amenities Name Updated Successfully',
            'alert-type' => 'Success'
        ];
        return redirect()->route('add.amenities')->with($notification);
    } //End method

    public function DeleteAmenitie($id){
        
        Amenities::findOrFail($id)->delete();

         $notification = [
            'message' => 'Amenities Deleted Successfully',
            'alert-type' => 'Success'
        ];

        return redirect()->back()->with($notification);
    }


}
