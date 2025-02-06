<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class CMSController extends Controller
{
    function index()
    {
        return view("home");
    } 
    function contact()
    {
        return view("contact");
    }
    
    function about()
    {
        //return redirect()->route('homepage');
        return view("about");
    }
    
    function service()
    {
        $services=['bca','mca','bscit','mscit','mba'];
        return view('service',compact('services'));
    }
    public function submitdata(Request $request)
    {
        $username= $request->input('username');
        $password= $request->input('pasword');
        return view ('contact',compact('username','password'));  
    }
}
