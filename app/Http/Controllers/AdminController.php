<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Hash;  

class AdminController extends Controller
{
    //
    public function AdminDashboard() 
    {
        return view('admin.index');
    }//End Method


    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }//End Method

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }//End method

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));
    }

    public function AdminProfileStore(Request $request): RedirectResponse{
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('imgs/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('imgs/admin_images'),$filename);
            $data['photo'] = $filename;
            
        }
        $data->save();

        $notification = [  
            'message' => 'Admin Profile Updated Successfully',  
            'alert-type' => 'success'  
        ];  
        
        return redirect()->back()->with($notification);

    }//End Method


    public function AdminChangePassword() {  
        $id = Auth::user()->id;  
        $profileData = User::find($id);  
    
        return view('admin.admin_change_password', compact('profileData'));  
    }
    //End method

    public function AdminUpdatePassword(Request $request)  
{  
    $validateData = $request->validate([  
        'old_password' => 'required',  
        'new_password' => 'required|confirmed|min:8',  
    ]);  

    // Check if old password matches  
    if (!Hash::check($request->old_password, Auth::user()->password)) {  
        return back()->with('error', 'Current password does not match!');  
    }  

    // Update password  
    User::whereId(Auth::user()->id)->update([  
        'password' => Hash::make($request->new_password)  
    ]);  

    return back()->with('message', 'Password changed successfully');  
    }  
}
