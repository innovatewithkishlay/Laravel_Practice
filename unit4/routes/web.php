<?php

use App\Http\Controllers\FormYZController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadYZController;

Route::get('/ghi',[FormYZController::class,'show']);
ROute::post('/submit',[FormYZController::class,'showForm']);
// Form repopulation is a technique used in web development to retain user input in form fields after a form submission, especially when there are validation errors. 
//This allows users to see their previously entered data and correct any mistakes without having to re-enter all the information. In Laravel, you can achieve form repopulation using the `old()` helper function, which retrieves the input data from the previous request.. 
//419 error is use for CSRF token mismatch. It occurs when the CSRF token sent with the form does not match the token stored in the user's session. This can happen if the token has expired, if the user has multiple tabs open, or if there is a problem with the session. To fix this error, you can try refreshing the page, clearing your browser's cache and cookies, or ensuring that your form includes a valid CSRF token using `@csrf` in your Blade template.
//CSRF (Cross-Site Request Forgery) is a type of attack where a malicious website tricks a user's browser into making an unwanted request to another site where the user is authenticated. Laravel protects against CSRF attacks by generating a unique token for each active user session. This token must be included in any form submissions or AJAX requests that modify data on the server. If the token is missing or does not match the one stored in the session, Laravel will reject the request and return a 419 error. To prevent CSRF attacks, always include the `@csrf` directive in your Blade templates when creating forms, and ensure that your AJAX requests include the CSRF token in the headers.

//Upload PDF file
Route::get('/upload',[UploadYZController::class,'show']);
Route::post('/upload-pdf',[UploadYZController::class,'upload']);