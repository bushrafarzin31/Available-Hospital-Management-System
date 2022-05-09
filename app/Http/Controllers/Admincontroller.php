<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patients_info;
use App\Models\Medical_services;
use App\Models\Available;
use Notification;
use App\Notifications\SendEmailNotification;

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
       
      $medical_services->Hospital_name=$request->Hospital_name;
      $medical_services ->Contact_number=$request->Contact_number;
      $medical_services->Covid_specialists=$request->Covid_specialists;
      $medical_services->status='In progress';
      $medical_services->save();
      return redirect()->back();
}
public function showappointment() 
{  
   $data=patients_info::all();
   return view('admin.showappointment',compact('data'));
    
}
public function showdoctor() 
{  
   $data=doctor::all();
   return view('admin.showdoctor',compact('data'));
    
}
public function deletedoctor($id) {
$data=doctor::find($id);
$data->delete();
return redirect()->back();
}
public function updatedoctor($id) {
   $data = doctor::find($id);

   return view('admin.update_doctor',compact('data'));
}
public function editdoctor(Request $request , $id){

   $doctor= doctor::find($id);
   $doctor->name=$request->name;
   $doctor->phone=$request->phone;
   $doctor->speciality=$request->speciality;
   $doctor->name=$request->name;
   $image=$request->file;
   if($image)
   {
   $imagename=time().'.'.$image->getClientOriginalExtension();
   $request->file->move('doctorimage',$imagename);

   $doctor->image=$imagename;
   } 
   $doctor->save();
   return redirect()->back();
}
public function available()
   {


    return view('admin.available');
   } 

   public function upload_2(Request $request){


      $available=new available;
     
      
      $available->Serial_no=$request->Serial_no;
      $available->Available_hospital=$request->Available_hospital;
      $available->Location=$request->Location;
      $available->Vacant_isolation_beds=$request->Vacant_isolation_beds;
      $available->Providable_oxygen_cylinder=$request->Providable_oxygen_cylinder;
      $available->Available_ventilator_ICU_beds=$request->Available_ventilator_ICU_beds;
      $available->save();
      return redirect()->back();
}
public function showhospital() 
{  
   $data=available::all();
   return view('admin.showhospital',compact('data'));
    
}
public function deletehospital($id) {
   $data=available::find($id);
   $data->delete();
   return redirect()->back();
   }
   public function updatehospital($id) {
      $data = available::find($id);
   
      return view('admin.update_hospital',compact('data'));
   }

   public function edithospital(Request $request , $id){

      $available= available::find($id);
      $available->Available_hospital=$request->Available_hospital;
      $available->Location=$request->Location;
      $available->Vacant_isolation_beds=$request->Vacant_isolation_beds;
      $available->Providable_oxygen_cylinder=$request->Providable_oxygen_cylinder;
      $available->Available_ventilator_ICU_beds=$request->Available_ventilator_ICU_beds;
      $available->save();
      return redirect()->back();
   }
   public function showservice() 
   {  
      $data=medical_services::all();
      return view('admin.showservice',compact('data'));
       
   }

   public function deleteservice($id) {
      $data=medical_services::find($id);
      $data->delete();
      return redirect()->back();
      }

      public function updateservice($id) {
         $data =medical_services::find($id);
      
         return view('admin.update_service',compact('data'));
      }


      public function editservice(Request $request , $id){

         $service= medical_services::find($id);
         $service->Hospital_name=$request->Hospital_name;
         $service->Contact_number=$request->Contact_number;
         $service->Covid_specialists=$request->Covid_specialists;
         $service->Providable_services=$request->Providable_services;
        
         $service->save();
         return redirect()->back();
      }

      public function approved($id) {
         $data=patients_info::find($id);
         $data->status='approved';
         $data->save();
         return redirect()->back();
         }


         public function canceled($id) {
            $data=patients_info::find($id);
            $data->status='Canceled';
            $data->save();
            return redirect()->back();
            }
            public function emailview($id){


               $data=patients_info::find($id);

               return view('admin.email_view',compact('data'));
            }


      public function sendemail(Request $request,$id)
      {
         $data=patients_info::find($id);

         $details=[
                  'greeting'=> $request->greeting,
                  'body'=>$request->body,
                  'actiontext'=>$request->actiontext,
                  'actionurl'=>$request->actionurl,
                  'endpart'=>$request->endpart
         ];

         Notification::send($data,new SendEmailNotification($details));

         return redirect()->back();
      }
}