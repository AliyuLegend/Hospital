<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
}); */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

//Route::get('/doctors/{id}', [App\Http\Controllers\SpecialController::class, 'doctor'])->name('doctors');
Route::get('/doctors/{id}', [App\Http\Controllers\SpecialController::class, 'doctor'])->name('doctors');
Route::get('/doctor-details/{id}', [App\Http\Controllers\DoctorController::class, 'doctorDetails'])->name('doctordetails');

Route::post('/appointment/{id}', [App\Http\Controllers\DoctorController::class, 'bookAppointment'])->name('bookAppointment');
Route::get('my-bookings', [App\Http\Controllers\Users\UsersController::class, 'myAppointments'])->name('appointment')->middleware('auth:web');



//Doctor Login details
Route::get('Doc/login', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'viewLogin'])->name('view.login')->middleware('check.for.login');;
Route::post('Doc/login', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'checkLogin'])->name('check.login');




Route::group(['prefix' => 'Doc', 'middleware' => 'auth:Doctor'], function() {

    Route::get('/index', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'index'])->name('doc.index');
    Route::get('/edit-status/{id}', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'editStatus'])->name('appointment.edit.status');
    Route::post('/appointment/update/{id}', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'updateStatus'])->name('appointment.update.status');



    // Define the route for the homepage
    Route::get('/', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'index'])->name('home');
    // Define the route for /index if you want to keep it as a separate route
    Route::get('/index', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'index'])->name('doc.index');

    Route::get('/profile', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'profile'])->name('profile');
    Route::post('/profile/update/{id}', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'updateProfile'])->name('profile.update');
   // Route::post('/profile/update', [App\Http\Controllers\Doc\DoctorsLoginController::class, 'updateProfile'])->name('profile.update');
    //Route::post('/profile', [App\Http\Controllers\userController::class, 'update'])->name('profile.update');

});
