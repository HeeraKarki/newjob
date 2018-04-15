<?php
namespace App\Controller\User;


use App\Models\User\CareerObjective;
use App\Models\User\User;

class JobSeekerController
{

    public function index(){
        $data['user_details']=User::where('id',auth()['id'])->first();
        return view('user/jobseeker',$data);
    }


    public function delete(){
        return view('user/delete');
    }


    public function resume(){
        return view('user/resume');
    }

    public function edit_resume(){
        return view('user/edit_resume');
    }

    public function profile_detail(){
        return view('user/profile_detail');
    }


    public function applied_job(){
        return view('user/applied_job');
    }
}