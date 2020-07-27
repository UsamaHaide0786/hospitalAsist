<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','first_name','last_name','address','mobile','timing','speciality','experience','date_of_joining','ward_id'];
}
