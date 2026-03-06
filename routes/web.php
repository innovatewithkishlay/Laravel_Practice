<?php

use Illuminate\Support\Facades\Route;

//This is optional parameter routing
Route::get('/username', function ($name) {
    return "Hello $name";
});
//This is required parameter routing
Route::get('/username/{name?}', function ($name="user") {
    return "Hello $name";
});
//This is multiple parameter routing
Route::get("/submitForm/{username}/{email}",function($name,$email){
    return "Your entered name is: ". $name . " and email is: " . $email;
});