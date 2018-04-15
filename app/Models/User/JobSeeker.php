<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $fillable=[
        'fullname','father_name','mother_name','date_of_birth','birth_place','nationality','nrc_no','address','phone_no','gender','photo','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}