<?php

namespace App\Controller\Admin;


use App\Models\Job\JobApplicant;
use App\Models\Job\JobPost;

class JobPostController
{
    public function __construct()
    {
        if (!is_admin()){
            return error('Error!',"You don't have permission to access this page",'Logout');
        }
    }

    public function pending(){

        $data['job_posts']=JobPost::all();
        $data['job_applicant']=JobApplicant::all();
        return view('admin/jobpost/pass',$data);
    }

}