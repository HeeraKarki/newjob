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

    public function career(){
        return $this->hasOne(CareerObjective::class,'user_id','id');
    }

    public function experiences(){
        return $this->hasMany(SeekerExperience::class,'user_id','id');
    }

    public function educations(){
        return $this->hasMany(SeekerEducation::class);
    }

    public function qualifications(){
        return $this->hasMany(SeekerQualification::class);
    }

    public function languages(){
        return $this->hasMany(SeekerLanguage::class);
    }

    public function job_seeker(){
        return $this->hasOne(JobSeeker::class);
    }
    public function employer(){
        return $this->hasOne(Employer::class);
    }

}