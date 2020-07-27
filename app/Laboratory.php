<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','name','ward_id','hospital_id'];
}
