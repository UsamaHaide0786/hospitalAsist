<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','date_of_appointment','time_of_appointment','patient_id','doctor_id','ward_id','hospital_id'];
}
