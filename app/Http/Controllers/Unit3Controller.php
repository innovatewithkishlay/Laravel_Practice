<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Unit3Controller extends Controller
{
    public function show(){
        return "Hello to the class with controller";
    }
    public function display(){
        return "This is the display method in the Unit3Controller";
    }
}