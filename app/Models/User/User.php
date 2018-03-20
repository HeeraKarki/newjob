<?php
namespace App\Models\User;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable=['name','email','password','token','isactive'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}