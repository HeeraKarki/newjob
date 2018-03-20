<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class SeekerQualification extends Model
{
    protected $fillable=[
        'jobseeker_ID','name','date','Qualification_date','Qualification_image_front',
        'Qualification_image_back'
    ];
}