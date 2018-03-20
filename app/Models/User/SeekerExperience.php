<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class SeekerExperience extends Model
{
    protected $fillable=[
        'jobseeker_ID','position','description','post_from_date','post_to_date'
    ];
}