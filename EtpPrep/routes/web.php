<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;



Route::get('/college', function () {
    $collegeName = "Lovely Professional University";
    return view('college', compact('collegeName'));
});