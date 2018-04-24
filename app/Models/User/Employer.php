<?php
namespace App\Models\User ;
use App\Models\Job\JobPost;
use Illuminate\Database\Eloquent\Model;
class Employer extends Model{
 
    protected $fillable=[
      'company_name','address','phone_no','description','no_of_employee','post_count',
      'location_id','website','logo','avatar','facebook','twitter','googleplus','user_id'
    ];

    public function job_posts(){
        return $this->hasMany(JobPost::class);
    }

    public function bank(){
        return $this->hasOne(EmployerBank::class);
    }

    public function order(){
        return $this->hasMany(EmployerOrder::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}