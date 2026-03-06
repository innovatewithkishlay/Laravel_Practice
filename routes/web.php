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


// Create a small route with parameter and return the parameter in the response. 
// The route should be /student/{name} and the response should be "Welcome to the student page: {name}" where {name} is the parameter passed in the URL.
// Also create a route with optional parameter /city/{name?} and return "Welcome to the City: {name}" where {name} is the parameter passed in the URL or "Unknown City" 
// if no parameter is provided.
Route::get("/student/{name}",function($name){
    return "Welcome to the student page: ". $name;
});

Route::get("/city/{name?}",function($name="Unknown City"){
    return "Welcome to the City: ". $name;
});