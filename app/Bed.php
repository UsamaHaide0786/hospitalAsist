<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','room_id','patient_id','hospital_id'];
}
