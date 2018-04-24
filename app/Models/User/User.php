<?php
namespace App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected $fillable=['name','email','password','role_id','token','isactive'];
    protected $hidden=['password'];

    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id');
    }

    public function hasrole($role){
        return $this->roles()->where('name',$role)->get()->isNotEmpty();
    }







    public function job_seeker(){
        return $this->hasOne(JobSeeker::class);
    }
    public function employer(){
        return $this->hasOne(Employer::class);
    }

}