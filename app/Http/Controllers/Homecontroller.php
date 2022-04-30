<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\doctor;
use App\Models\Patients_info;
use App\Models\Medical_services;


class Homecontroller extends Controller
{
    public function redirect()
    {

        if(Auth::id()){
            
if(AUth::user()->usertype=='0')
{
    $doctor=doctor::all();
return view('user.home',compact('doctor'));


}
else{
    return view('admin.home');
}
        }

        else{
            return redirect()->back();
        }
    }
public function index(){
    if(Auth::id()){
        return redirect('home');
    }
    else{
$doctor=doctor::all();

    return view('user.home',compact('doctor'));
}
}
public function patients_info(Request $request)
{
    $data=new patients_info;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->date=$request->date;
    $data->phone=$request->number;
    $data->details=$request->message;
    $data->status='In progress';
    if(Auth::id()){
        
    
    $data->user_id=Auth::user()->id;
    
    }
    $data->save();

  return view('user.patients_info');
    return redirect()->back('user.patients_info')->with('message','Patients information has been taken');
  

  
    
} 
public function myappointment(){
    return view('user.my_appointment');
}
 
public function medical_services(){
  
    

   return view('user.medical_services');
}
}



