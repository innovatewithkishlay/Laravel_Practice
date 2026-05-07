<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationYZController; //mandatory to import the controller

//Custom rule validation 
//Step1: create a basic form with number of input fields that is required inside the form like name,email,dob and password etc
//Step2: create a custom validation rule for each field using artisan command php artisan make:rule NameRuleYZ and php artisan make:rule EmailRuleYZ
//Step3: implement the logic for validation inside the custom rule class like for name field it should not be empty and should only contain letters and for email field it should not be empty and should end with @yahoo.com
//Step4: create a controller using artisan command php artisan make:controller ValidationYZController and import the rule class inside the controller and define a method validate and inside the method use the validate method of request object to validate the input fields using the custom validation rules
//Step5: define the route for form submission and point it to the validate method of the controller and also define the route for the form view
// a) Few things to know like include blade error directives @error and @enderror to show the error messages for each field and also include @csrf directive inside the form to protect against cross-site request forgery attacks
// b) also make sure to return the view with old input values using the old helper function to show the previously entered values in case of validation failure and also show the error messages for each field using the $errors variable which is available in all views by default
Route::get('/', function () {
    return view('MyYZForm');
});
Route::post('/login',[ValidationYZController::class,'validate']); //mandatory to define the route for form submission