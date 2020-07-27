<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','first_name','last_name','position','address','mobile','experience','date_of_joining'];
}
