<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalStore extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','name','ward_id','hospital_id'];
}
