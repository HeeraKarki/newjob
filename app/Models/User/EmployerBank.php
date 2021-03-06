<?php

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class EmployerBank extends Model
{
    protected $fillable=['account_no','employer_id','amount'];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}