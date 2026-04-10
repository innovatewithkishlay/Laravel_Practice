<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessController;
Route::get('/', function () {
    return "hello world";
});
Route::get('/test',[ProcessController::class,'test'])->middleware('checkuser');
Route::get('/try',[ProcessController::class,'try'])->middleware('checkuser');
Route::get('/friendcircle',[ProcessController::class,'friendcircle'])->middleware('checkuser');