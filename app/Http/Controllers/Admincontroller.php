<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

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
}
