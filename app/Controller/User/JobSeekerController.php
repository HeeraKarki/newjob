<?php
namespace App\Controller\User;


use App\Models\Job\JobApplicant;
use App\Models\Job\JobBookmark;
use App\Models\User\CareerObjective;
use App\Models\User\JobSeeker;
use App\Models\User\User;
use Core\Helper\Auth;
use Core\Helper\Hash;
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
        if (isset($data['user']->job_seeker->id)){
            $employer_id=$data['user']->job_seeker->id;
            $data['job_posts']=JobApplicant::where('job_seeker_id',$employer_id)->get();
            return view('user/applied_job',$data);
        }else{
            return error('Error!','Fill the Job Seeker Data');
        }

    }
    public function viewbookmark(){
        $data['user']=User::find(\auth()['id']);
        if (isset($data['user']->job_seeker->id)){
            $employer_id=$data['user']->job_seeker->id;
            $data['job_posts']=JobBookmark::where('job_seeker_id',$employer_id)->get();
            return view('user/bookmark',$data);
        }else{
            return error('Error!','Fill the Job Seeker Data');
        }

    }

    public function profile(){
        if (get_set('name') && Request::get('name')!==''){
            $name=Request::get('name');
            $name=str_replace('-',' ',$name);
            $data['job_seeker']=JobSeeker::where('fullname',$name)->first();
            return view('user/seekerprofile',$data);
        }else{
            return error('Error!','Fill the Job Seeker Data');
        }

    }


    public function profile_update(){
        $user=User::find(Request::post('id'));
        $user->update([
           'name'=>Request::post('name'),
           'email'=>Request::post('email')
        ]);

        return success('Update Successfully',"User Profile Update");
    }

    public function password_update(){

        if (checkpost('old_password')){
            return error('Invalid Old Password','Fill the Password');
        }

        if (checkpost('password')){
            return error('Invalid Password','Fill the Password');
        }

        if (checkpost('com_password')){
            return error('Invalid Comfirm Password','Fill the Comfirm Password');
        }


        if (Request::post('password') !== Request::post('com_password')){
            return error('Invaild','Password is not match');
        }

        $user=User::find(Request::post('id'));

        if (Hash::verify(Request::post('old_password'), $user->password)) {
            $user->password=Hash::make(Request::post('password'));
            $user->save();
            return success('Successful','Update your password');
        }else{
            return error('Error','Old Password is not Match');
        }
    }
    public function del(){
        User::destroy(Request::post('id'));
        return success('Successful','Your account has been deleted.','Logout');
    }
}