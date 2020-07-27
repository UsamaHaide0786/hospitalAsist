<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','name','ward_id','hospital_id'];
}
