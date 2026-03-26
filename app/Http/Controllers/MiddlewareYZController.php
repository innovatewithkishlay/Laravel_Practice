<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareYZController extends Controller
{
    public function  display(){
        return "Hi im a middleware controller";
    }
}
