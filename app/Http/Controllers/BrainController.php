<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\BrainMiddleware;
class BrainController extends Controller
{
    public function __construct(){
        // $this->middleware('agechecking');
    }
    
    public function access(){
        return "You are allowed to access this page";
    }
    public function info($id){
        return "Your id is ".$id;
    }
    public function first(){
        return view('myyzdata');
    }
    public function second(){
        return "This is the second functions";
    }
}
