<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //Query builder for performing curd-model class is not used query builder is used to perform curd operations on database using query builder we can perform operations like insert,update,delete and select on database using query builder we can also perform operations like join,group by and order by on database using query builder
    public function show(){
        return view('studentform');
    }
    public function insert(){

    }
    public function read(){

    }
    public function update(){
    }
    public function delete(){

    }
    public function edit(){

    }
}
