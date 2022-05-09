<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail; 
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact(){

        return view('contact-us');
    }
    public function sendEmail(Request $request){
    $details=[
        'full_name'=>$request->full_name,
        'email_address'=>$request->email_address,
        'phone'=>$request->phone,
        'subject'=>$request->subject,
        'message'=>$request->message
    ];
    
    Mail::to('farzinahana@gmail.com')->send(new ContactMail($details));
    
    return back()->with('message','Your  message has been sent successfully');
    
    
    }
}
