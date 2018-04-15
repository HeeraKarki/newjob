<?php

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class SeekerLanguage extends Model
{
    protected $fillable=['name','rating','user_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}