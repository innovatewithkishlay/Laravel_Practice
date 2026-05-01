<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionYZController extends Controller
{
    public function login(Request $request)
    {
        $request->session()->put('name', $request->input('user'));
        return "HI";
    }
    public function logout()
    {
        $request->session()->flush();
        return redirect('/loginform');
        
    }
}