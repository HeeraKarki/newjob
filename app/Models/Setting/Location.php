<?php

namespace App\Models\Setting;

use App\Models\Job\JobPost;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable= [
       'name'
    ];

    public function job_post(){
        return $this->hasMany(JobPost::class);
    }
}