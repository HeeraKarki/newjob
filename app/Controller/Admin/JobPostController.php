<?php

namespace App\Controller\Admin;


use App\Models\Job\JobApplicant;
use App\Models\Job\JobPost;
use App\Models\Setting\JobFunction;

class JobPostController
{
    public function pending(){

        $data['job_posts']=JobPost::all();
        $data['job_applicant']=JobApplicant::all();
        return view('admin/jobpost/pass',$data);
    }

}