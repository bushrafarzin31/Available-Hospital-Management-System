<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/Doctors_Information_view',[AdminController::class,'doctors_info']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/patients_info',[HomeController::class,'patients_info']);


Route::get('/patients_info',[HomeController::class,'patients_info']);

Route::get('/medical_services_view',[AdminController::class,'medical_services']);

Route::post('/upload_1_medical_services',[AdminController::class,'upload_1']);

Route::get('/medical_services',[HomeController::class,'show']);

Route::get('/doctor',[HomeController::class,'show_1']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post ('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/available_view',[AdminController::class,'available']);

Route::post('/upload_2_available',[AdminController::class,'upload_2']);

Route::get('/available_hospital',[HomeController::class,'show_3']);
Route::get('/showhospital',[AdminController::class,'showhospital']);

Route::get('/deletehospital/{id}',[AdminController::class,'deletehospital']);

Route::get('/updatehospital/{id}',[AdminController::class,'updatehospital']);

Route::post ('/edithospital/{id}',[AdminController::class,'edithospital']);

Route::get('/showservice',[AdminController::class,'showservice']);

Route::get('/deleteservice/{id}',[AdminController::class,'deleteservice']);

Route::get('/updateservice/{id}',[AdminController::class,'updateservice']);

Route::post ('/editservice/{id}',[AdminController::class,'editservice']);