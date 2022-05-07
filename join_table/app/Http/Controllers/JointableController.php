<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class JointableController extends Controller
{
    function index(){
$data=Appointment::join('medical_services','medical_services.phone','=','patients_info.phone')
                        ->get(['medical_services.Hospital_name','patients_info.doctor','patients_info.phone','patients_info.details','patients_info.status']);

                   
return view('join_table',compact('data'));
    }
}
