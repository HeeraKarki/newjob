<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    protected $fillable=['job_seeker_id','job_post_id','interview_date','status'];

    public function job_seeker(){
        return $this->belongsTo('App\Models\User\JobSeeker');
    }
    public function job_post(){
        return $this->belongsTo(JobPost::class);
    }
}