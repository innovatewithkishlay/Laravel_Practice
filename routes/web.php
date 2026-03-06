<?php

use Illuminate\Support\Facades\Route;

Route::get('/username/{name?}', function ($name="user") {
    return "Hello $name";
});