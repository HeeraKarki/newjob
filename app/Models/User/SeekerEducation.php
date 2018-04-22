<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class SeekerEducation extends Model
{
    protected $fillable=[
        'institute_name','degree','form','to','description','job_seeker_id'
    ];

    public function job_seekers(){
        return $this->belongsTo(JobSeeker::class);
    }
}