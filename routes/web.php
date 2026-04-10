<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Unit3Controller;
use App\Http\Controllers\InvokableController;
use App\Http\Controllers\ResourceYZController;
use App\Http\Controllers\APIYZController;
use App\Http\Controllers\MiddlewareYZController;
use App\Http\Controllers\GYZController;
use App\Http\Controllers\BrainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\testingresource;

// **********************************************UNIT 3 CONTROLLER ***********************************************
//Step1: Create a controller using the command php artisan make:controller Unit3Controller
//Step2: open create controller app->http->controller and add any method with route and return any string in that method
//Step3: open web.php import the controller and add the route for that method in the controller and return 

// Route::get('/unit3controller',[Unit3Controller::class,'show']);
// Route::get('/',[Unit3Controller::class,'display']);
// Route::Get('/middleware/{age}',[TestController::class,'students'])->middleware('agevalidator'); 


// Route::get('/invokable', InvokableController::class);
// Route::get('/display/{id}',[Unit3Controller::class,'display']);
// Route::get('/calc',[Unit3Controller::class,'calc']);
// Route::get('/pattern',[Unit3Controller::class,'pattern']); 

// **********************************************RESOURCE CONTROLLER ***********************************************
//Step1: Create a resource controller using the command php artisan make:controller ResourceYZController --resource
//Step2: open create controller app->http->controller and add any method with route and return any string in that method
//Step3: open web.php import the controller and add the route for that method in the controller and return any string in that method
// Route::resource('/kishlay',ResourceYZController::class);
// This will create all the routes for the resource controller like index, create, store, show, edit, update and destroy.
// Just run the command php artisan make:controller APIYZController --resource to create a resource controller and then add the route for that controller in web.php file.
// Route::apiResource('/apikishlay',APIYZController::class);


//Middlware in larverl 
// 1) create a middleware controller
// 2) create a middleware inside middlware folder using command php artisan make:middleware MyYZMidleware
// 3) register the middleware in bootstrap/app.php file
// 4) use the middleware in the route and test it by passing age parameter in the url like
// Route::get("/middleware",[MiddlewareYZController::class,'display'])->middleware('agefactor');


//Global middleware is a middleware that is applied to all the routes in the application. 
// It is registered in the bootstrap/app.php file and it will be executed for every request that is made to the application.
//  You can create a global middleware by creating a middleware class and then registering it in the bootstrap/app.php file.
// Route::get("/globalmiddleware",[GYZController::class,'privacy']);
//global middleware is registered using append, $middleware->append(GlobalMiddleware::class); and it will be executed for every request that is made to the application.


//This is middleware inside the controller, 
// Step1: create a middleware controller
// Step2: create a middleware inside middlware folder using command php artisan make:middleware BrainMiddleware
// Step3: register the middleware in bootstrap/app.php file
// Step4: use the middleware in the controller by adding the middleware in the constructor of the controller
// Step5: test the middleware by passing age parameter in the url like http://localhost:8000/brain?age=20
// Route::get("/brain",[BrainController::class,'access']);

//Template inheritance in laravel
// Step1: create a layout file in the views folder and add the common structure of the
// website like header, footer and navigation in that file and use @yield to define the section where the child views will be displayed.
// Step2: create child views and extend the layout file using @extends and define the section
// using @section and @endsection and add the content for that section in the child views.

// Route::view('abc','mylayout/app');
// Route::view("login",'userlogin');
// Route::view("logout",'userlogout');


// Group Routing using prefix and controller is used to group the routes under a common prefix and controller.
// It is defined using the Route::prefix and Route::controller methods.
// The prefix method is used to define the common prefix for the routes and the
// controller method is used to define the common controller for the routes. 
// The group method is used to group the routes together.
// Step1: create a controller using the command php artisan make:controller BrainController
// Step2: open create controller app->http->controller and add any method with route and return any string in that method
// Step3: open web.php import the controller and add the route for that method in the controller and return any string in that method
// for accesing the url http://localhost:8000/223yz/access
// Route::prefix('223yz')->controller(BrainController::class)->group(function(){
//     Route::get("/access","access")->where('id','[0-9]+');
//     Route::get("/data","data");
//     Route::get('/info/{id}',"info");
// });


//Group routing without prefix is used to group the routes together without any common prefix.
// It is defined using the Route::group method and it takes an array of options and a 
// closure as parameters. The options can be middleware, namespace, prefix etc. 
// and the closure contains the routes that are grouped together.
// Step1: create a controller using the command php artisan make:controller BrainController
// Step2: open create controller app->http->controller and add any method with route and return any string in that method
// Step3: open web.php import the controller and add the route for that method in the controller and return any string in that method
// for accesing the url http://localhost:8000/access
// Route::controller(BrainController::class)->group(function(){
//     Route::get("/access","access")->where('id','[0-9]+');
//     Route::get("/data","data");
//     Route::get('/info/{id}',"info");
// });

// Route::get("/abcd",function(){
//     $names=["Kishlay","Rahul","Satyarth","Anshul"];
//     return view('success',['names'=>$names]);
    // print_r($names);
    // $age=20;
    // echo "The name is $name";
    //var_dump($age);this display output in the form of boolean, integer, string etc. it is used to display the data type of the variable.
// });

// Route::get('/hij',function(){
//     // $names=["Kishlay","Rahul","Satyarth","Anshul"];
//     // return view('coding',['names'=>$names]);
//     $age=14;
//     return view('coding',compact('age'));
// });

//Display the subjects in the semeseter5, you have to use 
// on for compitorial, two for ethics, three for mvc programming and four for soft skills


//Domain Routing is used to route the requests based on the domain name. 
// It is defined using the Route::domain method and it takes the domain name as a parameter. 
// The routes that are defined inside the closure will be executed only when the request is made to the specified domain name.

Route::domain('admin.localhost')->group(function(){
    Route::get('/dashboard',function(){
        return "Welcome to the admin dashboard";
    });
    Route::get('/profile',function(){
        return "Welcome to the admin profile";
    });
});

// run code via http://admin.localhost:8000/dashboard
// and http://admin.localhost:8000/profile to test the domain routing.
// you need to add the following line in the hosts file to test the domain routing


//named route via controller
// Route::get('/',function(){
//     return view('coding');
// });
// Route::get('/acv/gjj/uuii/saa/jhdck',[GYZController::class,'privacy'])->name('223yz.privacy');
// Route::get('/testin',function(){
//     return redirect()->route('223yz.privacy');
// });
//Also practice question where you have to return image in the last of view of your photo using template inheritance


// Create two view first view contain picture of any cartoon character when you click 
// on that picture it will convert into spider man image

// here is first view code


// CA Qusetion
// You will have to use template inheritance and have to create home, about,profile,login,logout
// this navigation will be displayed on all chield views and you have to add sperate header 
// and fotters for all childs seperately and also add title for all the pages separately using section and yield in the layout file.
// and footer of second child must be green in color and third child footer must be red in color.


// Create Criteria of country and user in the middleware if user == your name and coutry = India then 
// only user can access the page otherwise error 
// Route::get('/activity',[ActivityController::class,'activity'])->middleware('countryCheck');
// Q how you can generate the framework in laravel
// these are using url, action and named route
// 1) url is used to generate the URL for a specific route. It is defined using the url() helper function and it takes the route name as a parameter. 
// It will return the URL for the specified route.
// 2) action is used to generate the URL for a specific controller action. It is defined using the action() helper function and it takes the controller action as a parameter. It will return the URL for the specified controller action.
// 3) named route is used to generate the URL for a specific route by using the name of the route. It is defined using the name() method in the route definition and it takes the name of the route as a parameter. It will return the URL for the specified named route.

// we are trying her to generate the framework using url and action in laravel, so we have created two methods in the BrainController and we are trying to generate the framework for those methods using url and action in the myyzdata view file.
// Route::get('/first',[BrainController::class,'first']);
// Route::get('/second',[BrainController::class,'second']);

// genrting framework by a url and actions
Route::get("/first",[BrainController::class,"first"]);
Route::get("/second",[BrainController::class,"second"]);
Route::get("/third",[BrainController::class,"third"]);
//URL generation
Route::get('/url',function(){
    return view('data');
});

//Breeze
// Step1 is to make a new project using command composer create-project laravel/laravel projectname
// Step2 is to install breeze using command composer require laravel/breeze --dev
// Step3 is to run the command php artisan breeze:install to install the breeze package
// Step4 is to run the command npm install to install the npm packages
// Step5 is to run the command npm run dev to compile the assets
// step 6 is to run the command php artisan serve
//**************************************** Second Unit ************************************** */
//This is optional parameter routing
// Route::get('/username/{name?}', function ($name="user") {
//     return "Hello $name";
// });

// //This is required parameter routing
// Route::get('/username/{name}', function ($name) {
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


//Name Route is used to assign a name to a route, which can be used to generate URLs
// so we need to have the named route so that the big route doesn't need to right that is a bad practice 
// so instead writing the whoel route just give it a name or redirect to the route.

// Route::get('/checkview',function(){
//     return view('test');    
// })
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
//Cookie and header and types of responses
// Basic Response
Route::get('/test', function () {
    return "Hello Kishlay";
});
// Attaching Headers
Route::get('/header',function(){
    return response("hey coming with the header")->header('Content-Type','text/plan');
});
// Attaching Cookies
Route::get('/headers',function(){
    return response("hey coming with the header")->header('Content-Type','text/plan')->cookie('name','kishlay',60);
});
//Deleting cookies
Route::get('/deletecookie',function(){
    return response("Deleting cookie")->cookie('name','',-1);
});
// JSON Response
Route::get('/json',function(){
    return response()->json([
        "name"=>"kishlay",
        "age"=>30,
    ]);
});
// Redirection 
Route::get('/abc/deg/fd/dfds/dfds',function(){
    return response()->json([
        "message"=>"This is the testing only ",
    ]);
})->name('testing');
Route::get('/test2',function(){
    // return view('test');
    return redirect()->route('testing');
});
//This is action redirection for controllers
Route::get('/test3',function(){
    return redirect()->action([BrainController::class,'second']);
});
Route::get('/result',[TestController::class,'students']);
