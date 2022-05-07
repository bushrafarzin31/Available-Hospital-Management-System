<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\doctor;
use App\Models\Patients_info;
use App\Models\Medical_services;
use App\Models\Available;

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
    $data->doctor=$request->doctor;
    $data->date=$request->date;
    $data->phone=$request->number;
    $data->details=$request->message;
    $data->status='In progress';
    if(Auth::id()){
        
    
    $data->user_id=Auth::user()->id;
    
    }
    
    $data->save();
    
    $doctor=doctor::all();

    return view('user.patients_info',compact('doctor'));
  
  return redirect('user.patients_info')->back()->with('message','Patients information has been taken');
  

  
    
} 
public function myappointment(){
    if(Auth::id())
    {
        $userid=Auth::user()->id;
        $patients_info=patients_info::where('user_id',$userid)->get();
         
        return view('user.my_appointment',compact('patients_info'));
    }
    else{
        return redirect()->back();
    }
    
}
 
public function show(){
  
    $data=Medical_services::all();

   return view('user.medical_services',['medical_services'=>$data]);
}
public function show_1(){
    $doctor=doctor::all();

    return view('user.doctor',compact('doctor'));
    return redirect()->back();
}
public function  cancel_appoint($id)
{
$data=patients_info::find($id);
$data->delete();
return redirect()->back();

}
public function show_3(){
  
    $data=Available::all();

   return view('user.available_hospital',['available_hospital'=>$data]);
}
} 



