<?php

namespace App\Models\User;

use App\Models\Job\JobApplicant;
use App\Models\Job\JobBookmark;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $fillable=[
        'fullname','father_name','mother_name','date_of_birth','birth_place','nationality','nrc_no','address','phone_no','gender','photo','user_id'
    ];

    public function educations(){
        return $this->hasMany(SeekerEducation::class);
    }

    public function qualifications(){
        return $this->hasMany(SeekerQualification::class);
    }

    public function languages(){
        return $this->hasMany(SeekerLanguage::class);
    }

    public function experiences(){
        return $this->hasMany(SeekerExperience::class);
    }

    public function career(){
        return $this->hasOne(CareerObjective::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function job_applicants(){
        return $this->hasMany(JobApplicant::class);
    }

    public function job_bookmarks(){
        return $this->hasMany(JobBookmark::class);
    }
}