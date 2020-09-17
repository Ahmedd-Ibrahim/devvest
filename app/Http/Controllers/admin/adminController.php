<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\mail;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){
        $emails = mail::all();
        return view('admin.index',compact('emails'));
    }
}
