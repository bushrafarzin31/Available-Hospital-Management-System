<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Medical_services;

class Admincontroller extends Controller
{
   public function doctors_info()
   {


    return view('admin.Doctors_Information');
   }
   public function upload(Request $request){


$doctor=new doctor;
$image=$request->file;
$imagename=time().'.'.$image->getClientOriginalExtension();

$request->file->move('doctorimage',$imagename);

$doctor->image=$imagename;
$doctor->name=$request->name;
$doctor->phone=$request->number;
$doctor->speciality=$request->speciality;

$doctor->save();
return redirect()->back();
   }
   public function medical_services()
   {


    return view('admin.medical_services');
   }  
   public function upload_1(Request $request){


      $medical_services=new medical_services;
     
      
      
      $medical_services->Hospital_name=$request->Hospital_name;
      $medical_services ->Providable_services=$request->Providable_services;
      $medical_services->Covid_specialists=$request->Covid_specialists;
      $medical_services->status='In progress';
      $medical_services->save();
      return redirect()->back();
}
}