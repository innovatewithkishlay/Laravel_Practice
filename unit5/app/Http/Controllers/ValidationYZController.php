<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\NameRuleYZ; //mandatory to import the custom validation rule
use App\Rules\EmailRuleYZ; //mandatory to import the custom validation rule
class ValidationYZController extends Controller
{
    public function validate(Request $request){
        $request->validate(
            [
                'name'=>['required', new NameRuleYZ],
                'email'=>['required', new EmailRuleYZ]
            ]
        );
        return "successfully validated";
    }
}
