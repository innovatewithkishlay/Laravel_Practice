<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadYZController extends Controller
{
    //
    public function show(){
        return view('uploadYz');
    }
    public function upload(Request $request){
        //method first to retrieve the file
        $file=$request->file('file'); //here in parameter we have to give the name of the file input field in the form
        $fileName=$file->getClientOriginalName(); //to get the original name of the file

        echo "Your file name is: ".$fileName;
        //method to store the file 
        // $file->store('223YZ'); //here in parameter we have to give the name of the folder where we want to store the file in storage/app/private
        // for storing it inside the public folder we have to do like this;
        // dd($file);
        // $file->storeAs('public/223YZ',$fileName); //here in parameter we have to give the name of the folder where we want to store the file in storage/app/public and the second parameter is the name of the file
        // $file->store('newUpload','public');
        //after storing the file we can access it via url like this
        // url('storage/223YZ/'.$fileName); //here in parameter we have to give the name of the folder where we have stored the file in storage/app/public and the second parameter
        //Now for storing the file in public folder
        $file->move(public_path('223YZ'),$fileName); //here in parameter we have to give the name of the folder where we want to store the file in public folder and the second parameter is the name of the file
        return response()->json([
            'message'=>'File uploaded succesfully',
            'file_name'=>$fileName,
            'file_url'=>url('storage/223YZ/'.$fileName) //here in parameter we have to give the name of the folder where we have stored the file in storage/app/public and
        ]);
    }
}
