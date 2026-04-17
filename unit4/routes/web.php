<?php

use App\Http\Controllers\FormYZController;
use Illuminate\Support\Facades\Route;


Route::get('/ghi',[FormYZController::class,'show']);
ROute::post('/submit',[FormYZController::class,'showForm']);