<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Unit3Controller;
use App\Http\Controllers\InvokableController;
//Step1: Create a controller using the command php artisan make:controller Unit3Controller
//Step2: open create controller app->http->controller and add any method with route and return any string in that method
//Step3: open web.php import the controller and add the route for that method in the controller and return 

// Route::get('/unit3controller',[Unit3Controller::class,'show']);
// Route::get('/',[Unit3Controller::class,'display']);

Route::get('/invokable', InvokableController::class);
Route::get('/display/{id}',[Unit3Controller::class,'display']);

//**************************************** Second Unit ************************************** */
//This is optional parameter routing
// Route::get('/username', function ($name) {
//     return "Hello $name";
// });
// //This is required parameter routing
// Route::get('/username/{name?}', function ($name="user") {
//     return "Hello $name";
// });
// //This is multiple parameter routing or multivalue routing
// Route::get("/submitForm/{username}/{email}",function($name,$email){
//     return "Your entered name is: ". $name . " and email is: " . $email;
// });
// //Constraint routing using numbers is used to restrict the parameter value to a specific format.
// Route::get("/user/{id}",function($id){
//     return "Your user id is:".$id;
//  })->where("id","[0-9]{2,8}");  //here we are restricting the id to be numeric only and should be between 2 to 8 digits.
// // This will restrict the id to be numeric only.

// //Constraint routing using alphabets is used to restrict the parameter value to a specific format.
// Route::get("/home/{name}",function($name){
//     return "Welcom to the home page: ".$name;
// })->where("name","[A-Za-z]+");

// //Fallback route is used to handle the requests that do not match any of the defined routes. 
// // It is defined using the Route::fallback method.
// Route::fallback(function(){
//     return "404 Not Found. The page you are looking for does not exist. kishlay saying this";
// });

// //Group routing is used to group multiple routes under a common prefix or middleware.
// Route::prefix("master")->group(function(){
//     Route::get("/dashboard",function(){
//         return "Welcome to the dashboard";
//     });
//     Route::get("/profile",function(){
//         return "Welcome to the profile page";
//     });
// });
// Route::prefix("agent")->group(function(){
//     Route::get("/profile",function(){
//         return "welcome to agent profile";
//     });
//     Route::get("/settings/{name}",function($name){
//         return "Welcome $name to the agent settings";
//     });
// });

// //Group Routing without prefix
// Route::group([],function(){
//     Route::get("/about",function(){
//         return "Welcome to the about page";
//     });
//     Route::get("/contact",function(){
//         return "Welcome to the contact page";
//     });
// });

// Route::get("/welcome",function(){
//     for($i=0;$i<5;$i++){
//         echo "Welcome to the $i the page <br>";
//     }
// });

//Name Route is used to assign a name to a route, which can be used to generate URLs or redirect to the route.

// Route::view('/nameroute','app');
// Route::view('/cse/scai/27block/web/cabin7','student')->name('details');

// //Passing values to the view 
// // 1) using Associative array
// Route::get('/',function(){
//     $courses=[
//         "sectionA"=>"Section A is brilliant",
//         "sectionB"=>"Section B is great",
//         "SectionC"=>"Section C is good",
//     ];
//     return view('student',['course'=>$courses]);
// });
// // 2) using compact function
// Route::get('/compact',function(){
//     $courses=[
//         "sectionA"=>"Section A is brilliant",
//         "sectionB"=>"Section B is great",
//         "SectionC"=>"Section C is good",   
//     ];
//     return view('student',compact('courses'));
// });
// // 3) using with method
// Route::get('/with',function(){
//     $courses=[
//         "sectionA"=>"Section A is brilliant",
//         "sectionB"=>"Section B is great",
//         "SectionC"=>"Section C is good",
//     ];
//     return view('student')->with('courses',$courses);
// });


// // *QUESTIONS PRACTICE*
// // Create a small route with parameter and return the parameter in the response. 
// // The route should be /student/{name} and the response should be "Welcome to the student page: {name}" where {name} is the parameter passed in the URL.
// // Also create a route with optional parameter /city/{name?} and return "Welcome to the City: {name}" where {name} is the parameter passed in the URL or "Unknown City" 
// // if no parameter is provided.
// Route::get("/student/{name}",function($name){
//     return "Welcome to the student page: ". $name;
// });

// Route::get("/city/{name?}",function($name="Unknown City"){
//     return "Welcome to the City: ". $name;
// });


// // Q. which command is use to create view using terminal ans is php artisan make:view viewname

// //create a route with constraint routing it should have letter k inside if not then say not found
// // Route::get("/product/{name}",function($name){
// //     return "Welcome to the product page: ". $name;
// // })->where("name",".*k.*"); //This will restrict the name to contain the letter "k" anywhere in the string. If the name does not contain "k", it will return a 404 Not Found response.
// Route::get("/product/{name}",function($name){
//     return "Welcome to the product page: ". $name;
// })->where("name","[A-Za-z]*k[A-Za-z]*");


// // MINI HACKY PROJECT
// // The Computer Science department is organizing several events such as Cognitia, Internal Event, Mini Expo, and Final Expo. You are required to develop a small Event Registration System using Laravel Routing.
// // Create routes to display the homepage with a welcome message and another route to display the list of available events.

// // Implement a route that allows users to view details of a specific event by passing the event name as a parameter in the URL.

// // Also create a route where students can register for an event by providing their name and roll number through route parameters.

// // Add another route where the student's branch is optional, so if it is not provided, a default value should be displayed.

// // Additionally, implement parameter constraints to ensure that the roll number accepts only numeric values and create another route where the ID must contain exactly three digits.

// // Test all routes by accessing them through appropriate URLs in the browser.

  
// // A)
// Route::get('eventhome',function(){
//         return "Welcome to the Computer Science Department Event Registration System";
// });
// // B)
// Route::prefix('events')->group(function(){
//         Route::get('Cognitia',function(){
//             return "Welcome to the Coginita even page, the details are below!! ";
//         });
//         Route::get('InternalEvent',function(){
//             return "Welcome to the Internal Event page, the details are below!! ";
//         });
//         Route::get("MiniExpo",function(){
//             return "Welcome to the MiniExpo, the details are below!!";
//         });
//         Route::get("FinalExpo",function(){
//             return "Welcome to the FinalExpo, the details are below!!";
//         });
//         Route::fallback(function(){
//             return "404 Not Found. The event you are looking for does not exist.";
//         });
// });
// Route::get("/events/{eventname}",function($eventname){
//     $events=[
//         "Cognitia" => "Welcome to the Cognitia event page, the details are below!!",
//         "InternalEvent" => "Welcome to the Internal Event page, the details are below!!",
//         "MiniExpo" => "Welcome to the MiniExpo, the details are below!!",
//         "FinalExpo" => "Welcome to the FinalExpo, the details are below!!"
//     ];
//     if(array_key_exists($eventname,$events)){
//         return $events[$eventname];
//     };
//   return "404 Not Found. The event you are looking for does not exist.";
// });
// // c)
// Route::get("/even/{name}/{rollno}/{branch?}",function($name,$rollno,$branch="CSE"){
//     return "Welcome $name, you have registered successfully for the evnt with roll number: $rollno";
// })->where("rollno","[0-9]{8)");



// // create one route with optional parameter which will showcase unknown , if you are entering nothing in the url and if you are entering something in the url then it will show palindrome number
// Route::get('/palindrome/{number?}',function($number=null){
//     if($number === null){
//         return "Unknown";
//     }
//     $num = $number;
//     $reversedNum = 0;

//     while ($num > 0) {
//         $digit = $num % 10;
//         $reversedNum = ($reversedNum * 10) + $digit;
//        $num = (int)($num / 10);
//     }

//     if($number===$reversedNum){
//         return "$number is a palindrome number.";
//     }
// });