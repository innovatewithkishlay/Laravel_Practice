<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //mandatory to import the DB facade to use query builder
class StudentController extends Controller
{
    //Query builder for performing curd-model class is not used query builder is used to perform curd operations on database using query builder we can perform operations like insert,update,delete and select on database using query builder we can also perform operations like join,group by and order by on database using query builder
    public function insert(){
        DB::table('students')->insert([
            'name'=>'kishlaytest',
            'email'=>'kkishlay502@gmail.com',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return "Data inserted successfully";
    }
    public function update(){
        DB::table('students')->where('id',1)->update([
            'name'=>'kishlayiya',
            'email'=>'dsu@gmail.com'
        ]);
    }

}
