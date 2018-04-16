<?php

namespace App\Models\Job;
use App\Models\Setting\ContractType;
use App\Models\Setting\JobFunction;
use App\Models\Setting\JobIndustry;
use App\Models\Setting\Location;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{

    protected $fillable=[
        'title','salary_min','salary_max','salary_type','experience','description','location_id','contract_type_id','user_id','job_function_id','job_industry_id'
    ];

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function contract_type(){
        return $this->belongsTo(ContractType::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function job_function(){
        return $this->belongsTo(JobFunction::class);
    }

    public function job_industry(){
        return $this->belongsTo(JobIndustry::class);
    }
}