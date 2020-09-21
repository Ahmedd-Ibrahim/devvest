<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\model\Portfolio;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Portfolio::paginate(15);
        return view('admin.portfolio.index',compact('projects'));
    } // End of index

    public function create()
    {
        return view('admin.portfolio.create');
    } // End of create

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'title' => 'required|max:255',
                'disc' => 'required',
                'photo' => 'required',
            ]);

            if($validator->fails()){
                return redirect()->route('admin.portfolio.create')->withErrors($validator)->withInput();;
            }
               // upload the project photo
        if( $request->hasFile('photo')){

            $image = $request->photo;
            $folder = 'projects';
            $image->store('/',$folder);
            $fileName = $image->hashName();
            $path = $folder . '/' . $fileName;

        } else{
            return redirect()->back()->with('error','please choose photo for this project');
        }

        Portfolio::create([
            'title'=> $request->title,
            'disc' => $request->disc,
            "photo" => $path
        ]);

        return redirect()->route('admin.portfolio.index')->with('success','Your project added succesfully');

        } catch(\ Exception $ex){

               return redirect()->back()->with('error','something unexpecting');
        }

    } // End of store

    // public function show(Portfolio $portfolio)
    // {
    //     //
    // } // End of show

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit',compact('portfolio'));
    } // End of edit

    public function update(Request $request, Portfolio $portfolio)
    {
        try{
            $validator = Validator::make($request->all(),[
                'title' => 'required|max:255',
                'disc' => 'required',
            ]);
            if($validator->fails()){
                return redirect()->route('admin.portfolio.edit')->withErrors($validator)->withInput();;
            }
            if( $request->has('photo')){
                $image = $request->photo;
                $folder = 'projects';
                $image->store('/',$folder);
                $fileName = $image->hashName();
                $path = $folder . '/' . $fileName;
                $portfolio->update([
                    'photo' => $path,
                    'title' => $request->title,
                    'dis' => $request->disc,
                ]);
                return redirect()->route('admin.portfolio.index')->with('success','updated done');
            } else{
                $portfolio->update($request->except(['photo']));
                return redirect()->route('admin.portfolio.index')->with('success','updated');
            }
        } catch(\ Exception $ex){
            return redirect()->back()->with('error','something unexpecting');
        }

    } // End of update

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success','deleted successfly');

    } // End of destroy

}
