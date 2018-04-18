<?php
namespace App\Controller\User;

use
    App\Models\Job\JobPost;
use App\Models\Setting\JobIndustry;
use App\Models\Setting\Location;
use Core\Request;

class JobController
{
    public function list(){

        $data['job_industries']=JobIndustry::all();
        $data['job_posts']=JobPost::all();
        $data['locations']=Location::all();

        if (get_set('search')){
            $job_industry=Request::get('job_industry');
            $location_id=Request::get('location_id');
            $data['job_posts']=JobPost::where('location_id',$location_id)
                ->where('job_industry_id',$job_industry)
                ->where('title','like','%%'.Request::get('keyword')."%%")
                ->get();
        }

        return view('job/list/index',$data);
    }


    public function detail(){
        $data['detail']=JobPost::find(Request::get('job_id'));
        $data['job_industries']=JobIndustry::all();
        $data['locations']=Location::all();
        return view('job/list/detail',$data);
    }

}
