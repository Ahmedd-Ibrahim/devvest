<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\emailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class frontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }// End of index

    function send(emailRequest $request)
    {
        try {

            $data = array(
                'name'      =>  $request->name,
                'email'      =>  $request->email,
                'subject'      =>  $request->subject,
                'message'   =>   $request->message
            );

            Mail::to('a9a19bc1b1-674c04@inbox.mailtrap.io')->send(new SendMail($data));
            return redirect()->route('front.index')->with('success', 'تم ارسال رسالتك بنجاح, شكرا على تواصلك معنا !');

//            return back()->with('success','Item created successfully!');

        }catch (\Exception $ex){
            return back()->with('error', 'unxpected problem!');
        }


    } // End of Send

} // End of controller
