<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YZ;// mandatory to import the model to use it in the controller
class YZController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //this is for reading the entries from the database and showing it to the user
    {
        //
        $data=YZ::all(); //eloquent method to get all the entries from the database and store it in the variable data
        return view('read2',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) //this is for showing the form to the user to create a new entry in the database
    {
        YZ::create([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return redirect('/abc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        YZ::create([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return redirect('/abc');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=YZ::find($id); //eloquent method to find the entry with the given id and store it in the variable data
        return view('show2',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data1=YZ::find($id); //eloquent method to find the entry with the given id and store it in the variable data
        return view('edit2',compact('data1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=YZ::find($id); //eloquent method to find the entry with the given id and store it in the variable data
        $data->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return redirect('/abc');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
