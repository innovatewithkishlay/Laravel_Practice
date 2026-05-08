<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //mandatory to import the DB facade to use query builder
class DemoController extends Controller
{
    //Query builder for performing curd-model class is not used query builder is used to perform curd operations on database using query builder we can perform operations like insert,update,delete and select on database using query builder we can also perform operations like join,group by and order by on database using query builder
    public function show(){
        return view('studentform');
    }
    public function insert(Request $request){
    $name=$request->input('name');
    $email=$request->input('email');
        DB::table('teachers')->insert([
            'name'=>$name,
            'email'=>$email,
        ]);
        return redirect('/read');
    }
    public function read(){
        $data=DB::table('teachers')->get();
        return view('read',compact('data'));
    }
    public function update(){
    }
    public function delete(){

    }
    public function edit(){

    }
}
