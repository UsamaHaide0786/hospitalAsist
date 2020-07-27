<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','first_name','last_name','address','mobile','age','gender'];
}
