<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YZ extends Model
{
    //
    protected $connection='mongodb'; //specifying the connection to be used for this model
    protected $collection='Studentdata'; //specifying the collection to be used for this model
    protected $fillable=['name','email']; //specifying the fillable fields for mass assignment
}
