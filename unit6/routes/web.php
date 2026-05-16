<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //mandatory to import the controller
use App\Http\Controllers\DemoController; //mandatory to import the controller
Route::get('/insert',[StudentController::class,'insert']); //mandatory to define the route for form submission
Route::get('/update',[StudentController::class,'update']); //mandatory to define the route for form submission
Route::get('/delete',[StudentController::class,'delete']);// mandatory to define route
Route::get('/read',[StudentController::class,'read']);// mandatory to define route
Route::get('/', function () {
    return view('welcome');
});

//Crud operation using Form submission
Route::get('/form',[DemoController::class,'show']);
Route::post('/insert',[DemoController::class,'insert']);
Route::get('/read',[DemoController::class,'read']);
Route::get('/delete/{id}',[DemoController::class,'delete']);
Route::get('/edit/{id}',[DemoController::class,'edit']);
Route::post('/update/{id}',[DemoController::class,'update']);

// compose reqyire mongodb/laravel-mongodb
// Run this command to connect with mongodb database