<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //mandatory to import the controller

Route::get('/insert',[StudentController::class,'insert']); //mandatory to define the route for form submission
Route::get('/', function () {
    return view('welcome');
});
