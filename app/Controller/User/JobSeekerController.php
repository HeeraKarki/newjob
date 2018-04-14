<?php
namespace App\Controller\User;


class JobSeekerController
{

    public function index(){
        return view('user/jobseeker');
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