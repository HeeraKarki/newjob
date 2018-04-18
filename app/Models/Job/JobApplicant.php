<?php

namespace App\Models\Job;


use App\Models\User\Employer;
use App\Models\User\JobSeeker;
use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    protected $fillable=['job_seeker_id','employer_id','pending'];

    public function job_seeker(){
        $this->belongsTo(JobSeeker::class);
    }
    public function employer(){
        $this->belongsTo(Employer::class);
    }
}