<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GYZController extends Controller
{
    public function privacy(){
        // return "This is the privacy policy page.";
        return "This is the privacy policy page. We take your privacy seriously and we will never share your personal information with third parties without your consent. We collect only the necessary information to provide you with the best service possible. If you have any questions about our privacy policy, please contact us.";
    }
    public function testin(){
        return view('app');
    }
}
