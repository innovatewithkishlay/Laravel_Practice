<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function students(){
        $students=[
        ["name"=>"Radha","marks"=>85],
        ["name"=>"kishu","marks"=>15],
        ["name"=>"Radhja","marks"=>85]
        ];
        // foreach($students as $student){
        //     // echo "$student - $student['marks]";
        //     echo "<br>";
        //     echo "Student name is: " . $student['name'] . "Marks is : " . $student['marks'];
        //     echo "<br>";
        //     if($student['marks']>=40){
        //         echo "Pass";
        //         echo "<br>";
        //     }else{
        //         echo "Fail";
        //         echo "<br>";
        //     }
        // }/
        return view('test',compact('students'));
    }
}
