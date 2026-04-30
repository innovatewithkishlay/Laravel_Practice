<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; //Mandatory to import Mail facade to send email
use App\Mail\TestingYZMail; //Import the Mailable class that we created to send email

class EmailYZController extends Controller
{
    public function send(){
        $data=[
            'name'=>'kishlay kumar',
            'info'=>'Please upload the marks'
        ];
        mail::to('rk209402maurya@gmail.com')->send(new TestingYZMail($data));
        return "Email sent successfully";
    }
//     public function send(){
//     $data = [
//         'name' => 'kishlay kumar',
//         'info' => 'Please upload the marks'
//     ];

//     return new TestingYZMail($data);
// }
}
