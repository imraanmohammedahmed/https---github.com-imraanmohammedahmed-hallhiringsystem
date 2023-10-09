<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\halls;

class AdminController extends Controller
{
    public function halls()

{
    return view('admin.halls');

}

public function uploadhalls(Request $request)
{
    $data=new halls;

    $image=$request->file;
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->file->move('hallimage',$imagename);
    
    $data->image=$imagename;

    $data->title=$request->title;
    $data->price=$request->price;
    $data->description=$request->description;
    $data->save();

    return redirect()->back()->with('message','Hall Added Succesfully');
    }


    public function allhalls()

{
    $data=halls::all();
    
    return view('admin.allhalls',compact('data'));

}

}

