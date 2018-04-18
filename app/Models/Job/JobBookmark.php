<?php

namespace App\Models\Job;


use App\Models\User\JobSeeker;
use Illuminate\Database\Eloquent\Model;

class JobBookmark extends Model
{
    protected $fillable=['job_seeker_id','job_post_id'];

    public function job_seeker(){
        return $this->belongsTo(JobSeeker::class);
    }

}