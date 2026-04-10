<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    //
    public function test(){
        return view('test');
    }
    public function try(){
        return view('try');
    }
    public function friendcircle(){
        $friends=["kishlay","radha","kishu","abhishek","priya"];
        return view('friendcircle',compact('friends'));
    }
}
