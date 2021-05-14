<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgPrescription extends Model
{
    protected $fillable = [
        'doctor_id','img', 'patient_id'
    ];
}
