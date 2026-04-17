<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormYZController extends Controller
{
    //
    public function show(){
        return view('formyz');
    }
    public function showForm(Request $request){
        //data validation via in built function 
        $request->validate([
            'name'=>'required|alpha|min:3|max:20',
            'email'=>'required|email',
            'phone'=>'required|numeric|min:10|max:10'
        ]);
        $name=$request->name;   
        $email=$request->email;
        $phone=$request->phone;
        if($name==null||$email==null||$phone==null){
            return response()->json([
                'error'=>'All fields are required'
            ]);
        }
        return response()->json([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone
        ]);
        // return "The name is: ".($name??"Not provided").($email??"Not provided").($phone??"Not provided");
    }
}


