<?php
namespace App\Models\User;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable=['name','email','password','role_id','token','isactive'];
    protected $hidden=['password'];

    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id');
    }

    public function hasrole($role){
        return $this->roles()->where('name',$role)->get()->isNotEmpty();
    }
}