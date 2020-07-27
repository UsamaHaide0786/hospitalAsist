<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','no_of_beds','ward_id','hospital_id'];
}
