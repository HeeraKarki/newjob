<?php
namespace App\Controller\User;

use App\Models\Job\JobApplicant;
use App\Models\Job\JobBookmark;
use
    App\Models\Job\JobPost;
use App\Models\Setting\JobIndustry;
use App\Models\Setting\Location;
use App\Models\User\User;
use Core\Request;

class JobController
{
    public function list(){

        $data['job_industries']=JobIndustry::all();
        $data['job_posts']=JobPost::paginate(15);
        $data['job_posts']->withPath(baseurl('Job_list'));
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
        $data['user']=User::find(auth()['id']);
        return view('job/list/detail',$data);
    }

    public function apply(){
        if (Request::post('job_seeker_id')===''){
            return error('Error! Fill the Job Seeker Requirement','Your Account Need to be Complete Setup.','User/Job_Seeker');
        }
        $data=JobApplicant::firstOrCreate(
            ['job_seeker_id'=>Request::post('job_seeker_id')],
            ['job_post_id'=>Request::post('job_post_id'),]);
        if (!$data->wasRecentlyCreated){
            return error('Already Applied','This job is already applied.please wait for interview acceptant for Employer.');
        }else{
            return success('Successfully Applied','Job was applied.please wait for interview acceptant for Employer');
        }
    }

    public function bookmark(){
        if (Request::post('job_seeker_id')===''){
            return error('Error! Fill the Job Seeker Requirement','Your Account Need to be Complete Setup.','User/Job_Seeker');
        }
        $data=JobBookmark::firstOrCreate(
            ['job_seeker_id'=>Request::post('job_seeker_id')],
            ['job_post_id'=>Request::post('job_post_id'),]);
        if (!$data->wasRecentlyCreated){
            return error('Already add to bookmark','This job is already in bookmark list.');
        }else{
            return success('Successfully Added','This job is added to your bookmark.');
        }
    }

}
