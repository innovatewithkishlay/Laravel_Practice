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
/*Route::get('/upload',[UploadYZController::class,'show']);
Route::post('/upload-pdf',[UploadYZController::class,'upload']); */

//Localization steps
//Step1: create folder of language in resources/lang (en,hi,ta,pa)
//Step2: create file messages.php in each language folder and add key value pair in it like return message and about
//Step3: create middleware to set locale and register it inside bootstrap/app.php
//Step4: create view  ther make select option to change lang and also add csrf 
//Step5: create route to set locale in session and redirect back to previous page
Route::get('/',function(){
    return view('welcome');
});
Route::get('/lang/{locale}',function($locale){
    session(['locale'=>$locale]);
    return redirect()->back();
});

//Question 
//Student are required to devlop cookie-based functionlity using route 
// a) the student needs to create an applciation with two route, where one route set a cookie  city = mumbai and another route 
// to retrive and display the value of cookie city.
// b) additionally, the student also need to check whether the cookie exit before dipalying it , if the coookies not found display the message "the message cookie not found" should be displayed.
//c)) student required to implement functionality  to implement using Cookie::queue() method to set mutiple cookie like name and email
// d) create a from to take input of name and email and set the cookie using Cookie::queue() method and display the value of cookie in another route.