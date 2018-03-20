<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $fillable=[
        'address','phone_no','date_of_birth','gender','nationality','nrc_no',
        'workexperience','photo'
    ];
}