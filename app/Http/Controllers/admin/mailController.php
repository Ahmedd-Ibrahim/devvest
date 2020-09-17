<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\mail;
use Illuminate\Http\Request;
use App\Http\Requests\emailRequest;


class mailController extends Controller
{

    public function __construct(){

        $this->middleware('auth', ['except' => ['store']]);

    }

    public function index()
    {

        $emails = mail::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.email.index',compact('emails'));

    } // End of index

    public function create()
    {

    } // End of create

    public function store(emailRequest $request)
    {

        try {
            mail::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'phone' => $request->phone,
                'messages' => $request->messages,
            ]);

            return redirect()->route('front.index')->with('success', 'تم ارسال رسالتك بنجاح, شكرا على تواصلك معنا !');
        } catch (\ Exception $ex){

            return redirect()->route('front.index')->with('error', 'هناك خطأ ما حاول لاحقا !');
        }

    } // End of store


    public function show(mail $mail)
    {
        return view('admin.email.single',compact('mail'));

    } // End of show


    public function edit(mail $mail)
    {

    } // End if edit


    public function update(Request $request, mail $mail)
    {

    } // End of update


    public function destroy(mail $mail)
    {

        try {
            if(!$mail){

                return redirect()->back()->with('error',' this Message not exist !');

            }else{

                $mail->delete();
                return redirect()->route('admin.mail.index')->with('success','Success delete the message !');
            } // End of try

        }catch (\ Exception $ex){
            return redirect()->back()->with('error',' Something wrong try later !');
        } // End of catch

    } // End of destroy

    public function delete(Request $request){
        try {
            if(empty($request->emails)){
                return redirect()->route('admin.mail.index')->with('error','Please check boxes to Delete Them');
            }
            mail::whereIn('id', $request->input('emails'))->delete();
            return redirect()->route('admin.mail.index')->with('success','Your messages deleted successfully');

        }catch (\ Exception $ex){

            return redirect()->route('admin.mail.index')->with('error','Something wrong unexpected');
        }

    } // End of delete

} // End of class
