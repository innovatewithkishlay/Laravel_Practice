<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Unit3Controller extends Controller
{
    public function show(){
        $course=["PHP","Laravel","JavaScript","VueJS"];
        return view('showview',compact('course'));
        // return "Hello to the class with controller";
    }
    public function display($id){
        $users=[
            1=>"Aman",
            2=>"Kishlay",
            3=>"Rohit",
            4=>"Satyarth",
        ];
        if(count($users)<=0){
            return view('missingvalue');
        }else{
            // $username= $users[$id]  ?? "User not found";
            return view('showview',compact('users','id'));
            // return "The user is: ". $users;
            // return view('showview',compact('users'));
        }
    }
    public function calc(){
        $a=10;
        $b=20;
        $c=$a+$b;
        return "The sum of a and b is: ". $c;
    }
    public function pattern(){
        $pattern="";
        for($i=1;$i<=5;$i++){
            for($j=1;$j<=$i;$j++){
                $pattern .="*";
            }
            $pattern .="<br>";
        }
        return $pattern;
    }
}