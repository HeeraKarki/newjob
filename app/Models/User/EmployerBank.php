<?php

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class EmployerBank extends Model
{
    protected $fillable=['account_no'];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}