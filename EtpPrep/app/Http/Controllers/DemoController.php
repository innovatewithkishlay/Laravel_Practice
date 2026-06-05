<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function show()
    {
        return view('TeacherForm');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teacher,email'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');

        DB::table('teacher')->insert([
            'name' => $name,
            'email' => $email,
        ]);
        return redirect('/read');
    }
    public function read()
    {
        $data = DB::table('teacher')->get();
        return view('Read', compact('data'));
    }
    public function delete($id)
    {
        DB::table('teacher')->where('id', $id)->delete();
        return redirect('/read');
    }
    public function edit($id)
    {
        $data1 = DB::table('teacher')->where('id', $id)->first();
        return view('edit', compact('data1'));
    }
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        DB::table('teacher')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
        ]);
        return redirect('/read');
    }
}
