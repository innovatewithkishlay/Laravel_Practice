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
//This is multiple parameter routing or multivalue routing
Route::get("/submitForm/{username}/{email}",function($name,$email){
    return "Your entered name is: ". $name . " and email is: " . $email;
});
//Constraint routing using numbers is used to restrict the parameter value to a specific format.
Route::get("/user/{id}",function($id){
    return "Your user id is:".$id;
 })->where("id","[0-9]{2,8}");  //here we are restricting the id to be numeric only and should be between 2 to 8 digits.
// This will restrict the id to be numeric only.

//Constraint routing using alphabets is used to restrict the parameter value to a specific format.
Route::get("/home/{name}",function($name){
    return "Welcom to the home page: ".$name;
})->where("name","[A-Za-z]+");

//Fallback route is used to handle the requests that do not match any of the defined routes. 
// It is defined using the Route::fallback method.
Route::fallback(function(){
    return "404 Not Found. The page you are looking for does not exist.";
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

//create a route with constraint routing it should have letter k inside if not then say not found
Route::get("/product/{name}",function($name){
    return "Welcome to the product page: ". $name;
})->where("name",".*k.*"); //This will restrict the name to contain the letter "k" anywhere in the string. If the name does not contain "k", it will return a 404 Not Found response.