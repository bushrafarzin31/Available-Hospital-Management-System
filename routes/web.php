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

Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/patients_info',[HomeController::class,'patients_info']);

Route::get('/medical_services_view',[AdminController::class,'medical_services']);
Route::post('/upload_1_medical_services',[AdminController::class,'upload_1']);
Route::get('/medical_services',[HomeController::class,'show']);
