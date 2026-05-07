<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //mandatory to import the DB facade to use query builder
class StudentController extends Controller
{
    //Query builder for performing curd-model class is not used query builder is used to perform curd operations on database using query builder we can perform operations like insert,update,delete and select on database using query builder we can also perform operations like join,group by and order by on database using query builder
    public function insert(){
        DB::table('students')->insert([
            'name'=>'kishlay',
            'email'=>'kkishlay502@gmail.com'
        ]);
        return "Data inserted successfully";
    }

}
