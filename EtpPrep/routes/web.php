<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/form', [DemoController::class, 'show']);
Route::post('/insert', [DemoController::class, 'insert']);
Route::get('/read', [DemoController::class, 'read']);
Route::get('/delete/{id}', [DemoController::class, 'delete']);
Route::get('/edit/{id}', [DemoController::class, 'edit']);
Route::post('/update/{id}', [DemoController::class, 'update']);