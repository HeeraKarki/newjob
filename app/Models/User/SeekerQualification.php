<?php
/**
 * Created by PhpStorm.
 * User: bkj
 * Date: 4/15/18
 * Time: 10:13 PM
 */

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class SeekerQualification extends Model

{
    protected $fillable=['txt','job_seeker_id'];


    public function job_seeker(){
        return $this->belongsTo(JobSeeker::class);
    }
}