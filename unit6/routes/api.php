<?php
use Illuminate\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingAPIController;

Route::apiResource('/abc', TestingAPIController::class); //mandatory to define the route for api resource controller