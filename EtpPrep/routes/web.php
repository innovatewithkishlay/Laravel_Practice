<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

Route::get('/form', [DemoController::class, 'show']);
Route::post('/insert', [DemoController::class, 'insert']);
Route::get('/read', [DemoController::class, 'read']);
Route::get('/delete/{id}', [DemoController::class, 'delete']);
Route::get('/edit/{id}', [DemoController::class, 'edit']);
Route::post('/update/{id}', [DemoController::class, 'update']);
Route::get('/fileform', [FileUploadController::class, 'uploadform']);
Route::post("/fileupload", [FileUploadController::class, 'upload']);

// --- Cookie Examples ---

// 1. Set a cookie
Route::get('/set-cookie', function () {
    // The cookie() helper takes: name, value, and minutes to expire
    $cookie = cookie('my_hobby', 'coding', 60); // Expires in 60 minutes

    // You attach cookies to a Response
    return response('Cookie has been set!')->cookie($cookie);
});

// 2. Get a cookie
Route::get('/get-cookie', function () {
    // Read the cookie using the request() helper
    $hobby = request()->cookie('my_hobby');

    if ($hobby) {
        return 'Your hobby is: ' . $hobby;
    }

    return 'Cookie not found!';
});

// 3. Delete a cookie
Route::get('/delete-cookie', function () {
    // To delete a cookie, you attach 'withoutCookie' to your response
    return response('Cookie has been deleted!')->withoutCookie('my_hobby');
});
Route::get('/send-email', function () {
    Mail::to('kishlay141@gmail.com')->send(new WelcomeMail());

    return "Email Sent Successfully";
});

Route::get('/test', function () {
    return view('Lang');
});