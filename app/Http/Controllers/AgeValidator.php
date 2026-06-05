<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeValidator extends Controller
{
    public function ageform(Request $request)
    {
        $age = $request->age;
        return response("your age is: " . $age);
    }
}
