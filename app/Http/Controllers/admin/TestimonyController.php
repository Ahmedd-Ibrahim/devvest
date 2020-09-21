<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonyController extends Controller
{

    public function index()
    {
        $testimony = Testimony::paginate(15);
        return view('admin.testimony.index',compact('testimony'));
    } // End of index

    public function create()
    {

        return view('admin.testimony.create');

    } // End of create

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'job_title' => 'required',
            'comment' => 'required',
            'photo' => 'required'
        ]
    );
    if($validator->fails()){
        return redirect()->back()->with('error','please fill all form');
    }

    if($request->hasFile('photo')){

        $image = $request->photo;
        $folder = 'testimony';
        $image->store('/',$folder);
        $fileName = $image->hashName();
        $path = $folder . '/' . $fileName;
    }else{
        return redirect()->back()->with('error','please Choose Avater');
    }

    Testimony::create([
        'name' => $request->name ,
        'job_title' => $request->job_title ,
        'comment' => $request->comment ,
        'avater' =>  $path
    ]);

    return redirect()->route('admin.testimony.index')->with('success','Your new comment added to Testimonails');

    } // End of store

    // public function show(Testimony $testimony)
    // {
    //     //
    // }


    public function edit(Testimony $testimony)
    {
        return view('admin.testimony.edit',compact('testimony'));
    } // End of edit

    public function update(Request $request, Testimony $testimony)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'job_title' => 'required',
            'comment' => 'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->with('error','please fill all form');
        }

        $path = $testimony->avater;
    if($request->hasFile('photo')){
        $image = $request->photo;
        $folder = 'testimony';
        $image->store('/',$folder);
        $fileName = $image->hashName();
        $path = $folder . '/' . $fileName;
    }
    $testimony->update([
        'name' => $request->name,
        'job_title' => $request->job_title,
        'comment' => $request->comment,
        'avater' => $path
    ]);

    return redirect()->route('admin.testimony.index')->with('success','Your testimony updated succesflly');

    } // End of update

    public function destroy(Testimony $testimony)
    {
        $testimony->delete();
        return redirect()->route('admin.testimony.index')->with('success','Your testimony Deleted successfuly');
    } // End of destroy
}
