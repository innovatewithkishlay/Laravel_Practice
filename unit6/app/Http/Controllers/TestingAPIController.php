<?php

namespace App\Http\Controllers;
use App\Models\Testing; //importing the model to be used in the controller
use Illuminate\Http\Request;

class TestingAPIController extends Controller
{
    public function index()
    {
        return Testing::all(); //eloquent method to get all the entries from the database and return it as a response
    }
    public function store(Request $request)
    {
        Testing::create([
            'name'=>$request->name,
            'email'=>$request->email
        ]); //eloquent method to create a new entry in the database with the given data from the request
        return response()->json(['message'=>'Data created successfully']); //returning a json response with a message
    }
}
