<?php
namespace App\Controller\User;


use App\Models\Job\JobPost;
use App\Models\Setting\ContractType;
use App\Models\Setting\JobFunction;
use App\Models\Setting\JobIndustry;
use App\Models\Setting\Location;
use App\Models\User\Employer;
use App\Models\User\User;
use Core\Helper\Auth;
use Core\Request;

class EmployerController
{
    public function __construct()
    {
        if (!Auth::check()){
            return error('Error! ','User is not Login...Please Login','Login');
        }
    }

    public function index(){
        $data['locations']=Location::all();
        $data['user_details']=User::where('id',auth()['id'])->first();
        return view('user/empolyer/index',$data);
    }

    public function add(){
        $target_dir = "data/user/".auth()['id'].'/';
        $data=[
            'company_name' => Request::post('company_name'),
            'address' => Request::post('address'),
            'phone_no' => Request::post('phone_no'),
            'description' => Request::post('description'),
            'no_of_employee' => Request::post('no_of_employee'),
            'location_id' => Request::post('location_id'),
            'website' => Request::post('website'),
            'facebook' => Request::post('facebook'),
            'twitter' => Request::post('twitter'),
            'googleplus' => Request::post('googleplus')
        ];
        if (isset($_FILES['photo']) && $_FILES['photo']['name']!==''){
            $name=upload($target_dir,'photo');
            $data=array_merge($data,['avatar'=>$name]);
        }

        if (isset($_FILES['logo']) && $_FILES['logo']['name']!==''){
            $name=upload($target_dir,'logo');
            $data=array_merge($data,['logo'=>$name]);
        }

        Employer::updateOrCreate(['user_id'=>auth()['id']],$data);
        return success('Add Company Detail','Succesful Add Detial');
    }


    public function post_job(){
        $data['user']=User::find(\auth()['id']);
        if ( $data['user']->employer->id === null){
            return error('Job Post Error!','Your account profile is not completed.First Fill requirement.','User/Employer');
        };
        $data['job_functions']=JobFunction::all();
        $data['job_industries']=JobIndustry::all();
        $data['locations']=Location::all();
        $data['contract_types']=ContractType::all();

        return view('user/empolyer/postjob',$data);
    }

    public function post_job_add(){
        $data=[
            'title'=>Request::post('title'),
            'salary_min'=>Request::post('salary_min'),
            'salary_max'=>Request::post('salary_max'),
            'salary_type'=>Request::post('salary_type'),
            'deathline'=>Request::post('deathline'),
            'responsibilities'=>Request::post('responsibilities'),
            'requirement'=>Request::post('requirement'),
            'experience'=>Request::post('experience'),
            'description'=>Request::post('description'),
            'location_id'=>Request::post('location_id'),
            'contract_type_id'=>Request::post('contract_type_id'),
            'employer_id'=>Request::post('employer_id'),
            'job_function_id'=>Request::post('job_function_id'),
            'job_industry_id'=>Request::post('job_industry_id')
        ];
        JobPost::create($data);
        return success('Add New Job','Successfully created a post.');
    }
}