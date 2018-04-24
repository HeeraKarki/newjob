<?php

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class EmployerOrder extends Model
{
    protected $fillable=['amount','employer_id'];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

}