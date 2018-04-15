<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class SeekerExperience extends Model
{
    protected $fillable=[
        'company_name','designation','description','post_from_date','post_to_date','user_id'
    ];
}