<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //mandatory to import the controller

Route::get('/insert',[StudentController::class,'insert']); //mandatory to define the route for form submission
Route::get('/update',[StudentController::class,'update']); //mandatory to define the route for form submission
Route::get('/delete',[StudentController::class,'delete']);// mandatory to define route
Route::get('/read',[StudentController::class,'read']);// mandatory to define route
Route::get('/', function () {
    return view('welcome');
});