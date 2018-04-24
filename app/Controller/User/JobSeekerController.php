<?php
namespace App\Controller\User;


use App\Models\Job\JobApplicant;
use App\Models\User\CareerObjective;
use App\Models\User\JobSeeker;
use App\Models\User\User;
use Core\Helper\Auth;
use Core\Request;

class JobSeekerController
{

    public function __construct()
    {
        if (!Auth::check()){
            return error('Error! ','User is not Login...Please Login','Login');
        }
    }

    public function index(){
        $data['user_details']=User::where('id',auth()['id'])->first();
        return view('user/jobseeker',$data);
    }


    public function delete(){
        return view('user/delete');
    }


    public function resume(){
        $data['user_details']=User::where('id',auth()['id'])->first();
        return view('user/resume',$data);
    }

    public function edit_resume(){
        return view('user/edit_resume');
    }

    public function profile_detail(){
        $data['user']=User::find(\auth()['id']);
        return view('user/profile_detail',$data);
    }


    public function applied_job(){
        $data['user']=User::find(\auth()['id']);
        $employer_id=$data['user']->job_seeker->id;
        $data['job_posts']=JobApplicant::where('job_seeker_id',$employer_id)->get();
        return view('user/applied_job',$data);
    }

    public function profile(){
        $name=Request::get('name');
        $name=str_replace('-',' ',$name);
        $data['job_seeker']=JobSeeker::where('fullname',$name)->first();
        return view('user/seekerprofile',$data);
    }

    public function del(){
        User::destroy(Request::post('id'));
        return success('Successful','Your account has been deleted.','Logout');
    }
}