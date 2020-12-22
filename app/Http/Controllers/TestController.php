<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        return DB::table('students')->get();
    }

    public function display($cid=1, $pid=101)
    {
        return $cid."-".$pid;
    }


    public function create()
    {
        return view('student.add');
    }

    public function show($id)
    {
       return DB::table('students')->where('id',$id)->get();
    }

    public function store(Request $request)
    {
        $flag = DB::table('students')
        ->insert(["name"=>$request->name,
        "email"=>$request->email,
        "enrollment"=>$request->enrollment]);
        
        if($flag)
        {
            return "success";
        }
        else
        {
            return "fail";
        }
        //return $request->all();
    }
}
