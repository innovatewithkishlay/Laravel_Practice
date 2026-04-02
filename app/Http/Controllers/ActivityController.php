<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity(){
        return "Your are <i>allowed</i> to access this page";
    }
}
