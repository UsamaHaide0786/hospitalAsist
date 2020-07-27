<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','name','doctor','operation_theater','hospital_id'];
}
