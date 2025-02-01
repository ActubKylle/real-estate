<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AmenitiesController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Middleware\Role;  


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



});

require __DIR__.'/auth.php';

//Admin Group middleware

// Route::middleware(['auth', 'role:admin'])->group(function () {  
//     Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');  
//     Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');  
//     Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');  
//     Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');  
//     Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');  
//     Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');  
//     Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');  
// });  


Route::get('/admin/logout', [AdminController::class,'AdminLogout'])->name(name: 'admin.logout');
Route::get('/admin/dashboard', [AdminController::class,'AdminDashboard'])->name('admin.dashboard');

Route::get('/admin/login', [AdminController::class,'AdminLogin'])->name(name: 'admin.login');
Route::get('/admin/profile', [AdminController::class,'AdminProfile'])->name(name: 'admin.profile');
Route::post('/admin/profile/store', [AdminController::class,'AdminProfileStore'])->name(name: 'admin.profile.store');
Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');  
Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');


Route::get('/agent/dashboard', [AgentController::class,'AgentDashboard'])->name('agent.dashboard');




// Route::middleware(['auth','role:admin'])->group(function(){

//     //Property Type All Route
//     Route::controller(PropertyTypeController::class)->group(function(){
//         Route::get('/all/type', 'AllType')->name( 'all.type');
 
//     });


// });


Route::get('/all/type', [PropertyTypeController::class,'AllType'])->name('all.type');
Route::get('/add/type',  [PropertyTypeController::class,'AddType'])->name('add.type');
Route::post('/store/type', [PropertyTypeController::class,'StoreType'])->name('store.type');
Route::get('/edit/type/{id}', [PropertyTypeController::class, 'EditType'])->name('edit.type');
Route::get('/delete/type/{id}', [PropertyTypeController::class, 'DeleteType'])->name('delete.type');
Route::post('/update/type', [PropertyTypeController::class,'UpdateType'])->name('update.type');


// //Amenities Type All rotues
Route::get('/all/amenitie', [PropertyTypeController::class,'AllAmenitie'])->name('all.amenitie');
Route::get('/add/amenities',  action: [PropertyTypeController::class,'AddAmenities'])->name('add.amenities');
Route::post('/store/amenitie', [PropertyTypeController::class,'StoreAmenitie'])->name('store.amenitie');
Route::get('/edit/amenities/{id}', [PropertyTypeController::class, 'EditAmenities'])->name('edit.amenities');
Route::get('/delete/amenities/{id}', [PropertyTypeController::class, 'DeleteAmenitie'])->name('delete.amenities');
Route::post('/update/amenities', [PropertyTypeController::class,'UpdateAmenitie'])->name('update.amenities');
