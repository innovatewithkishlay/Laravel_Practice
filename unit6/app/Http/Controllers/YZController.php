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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
