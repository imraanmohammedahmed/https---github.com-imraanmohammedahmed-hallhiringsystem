<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Halls;

class HomeController extends Controller
{

        public function redirect()
   {
    $usertype=Auth::user()->usertype;
    if($usertype=='1')
    {
        return view('admin.home');
    }
    else
    {
        $data = Halls::paginate(3);

        return view('user.home',compact('data'));
    }
    }
  
    public function index()
    {
        if(Auth::id())
        {
            return redirect('/redirect');
        }
        else
        {

            $data = Halls::paginate(3);

        return view('user.home',compact('data'));
   }

}
}