<?php

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class SeekerLanguage extends Model
{
    protected $fillable=['name','rating','job_seeker_id'];

    public function users(){
        return $this->belongsTo(JobSeeker::class);
    }
}