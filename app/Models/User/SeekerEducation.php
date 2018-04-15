<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class SeekerEducation extends Model
{
    protected $fillable=[
        'institute_name','degree','form','to','description','user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}