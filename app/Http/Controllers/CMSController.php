<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CMSController extends Controller
{
    public function index($name="") {     
        return view('index', compact('name'));
    }

    public function about(){
        return view('about');
    }

    public function service(){
        $processes = array("Design Graph","Step 2","Step 3","Step 4","Step 5","Step 6","Step 7","Step 8","Step 9","Step 10","Step 11","Step 12");        
        return view('service',compact('processes'));
    }

    public function contact(){
        return view('contact');
    }

}
