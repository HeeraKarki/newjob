<?php

namespace App\Controller\User;


use App\Models\User\CareerObjective;
use App\Models\User\JobSeeker;
use App\Models\User\SeekerEducation;
use App\Models\User\SeekerExperience;
use App\Models\User\SeekerLanguage;
use App\Models\User\SeekerQualification;
use Core\Helper\Auth;
use Core\Request;

class SeekerDetail
{

    public function __construct()
    {
        if (!Auth::check()){
            return error('Error! ','User is not Login...Please Login','Login');
        }
    }

    public function career(){
        CareerObjective::updateOrCreate(
            ['job_seeker_id'=>Request::post('job_seeker_id')],
            ['txt'=>Request::post('txt')]
        );
        return success('Update Successful',' User Career Objective Updated!.');
    }


    public function work_experience(){
        SeekerExperience::create([
           'company_name' => Request::post('company_name'),
           'designation' => Request::post('designation'),
           'description' => Request::post('description'),
           'post_from_date' => Request::post('post_from_date'),
           'post_to_date' => Request::post('post_to_date'),
            'job_seeker_id'=>Request::post('job_seeker_id')
        ]);
        return success('Add New Work Experience','Succesful add new experience');
    }

    public function work_experience_delete(){
        SeekerExperience::destroy((int)Request::post('id'));
        return success('Successful','Delete Work Experience Complete');
    }

    public function education_delete(){
        SeekerEducation::destroy(Request::post('id'));
        return success('Successful','Delete Education Complete');
    }

    public function qualification_delete(){
        SeekerQualification::destroy(Request::post('id'));
        return success('Successful','Delete Seeker Qualification Complete');
    }

    public function language_delete(){
        SeekerLanguage::destroy(Request::post('id'));
        return success('Successful','Delete Seeker Language Complete');
    }

    public function education(){
        SeekerEducation::create([
            'institute_name' => Request::post('institute_name'),
            'degree' => Request::post('degree'),
            'form' => Request::post('form'),
            'to' => Request::post('to'),
            'description' => Request::post('description'),
            'job_seeker_id' => Request::post('job_seeker_id'),
        ]);
        return success('Add New Education','Succesful add new education');
    }

    public function qualification(){
        SeekerQualification::create([
            'txt' => Request::post('txt'),
            'job_seeker_id' => Request::post('job_seeker_id'),
        ]);
        return success('Add New Qualification','Succesful add new Qualification');
    }

    public function language(){
        SeekerLanguage::create([
            'name' => Request::post('name'),
            'rating' => Request::post('rating'),
            'job_seeker_id' => Request::post('job_seeker_id'),
        ]);
        return success('Add New Language','Succesful add new Language');
    }

    public function detail(){
        $target_dir = "data/user/".auth()['id'].'/';
//        upload($target_dir,"photo");
        $data=[
            'fullname' => Request::post('fullname'),
            'father_name' => Request::post('father_name'),
            'mother_name' => Request::post('mother_name'),
            'date_of_birth' => date('Y-m-d',strtotime(Request::post('date_of_birth'))),
            'birth_place' => Request::post('birth_place'),
            'nationality' => Request::post('nationality'),
            'nrc_no' => Request::post('nrc_no'),
            'address' => Request::post('address'),
            'phone_no' => Request::post('phone_no'),
            'gender' => Request::post('gender'),
//            'user_id' => auth()['id'],
        ];
        if (isset($_FILES['photo']) && $_FILES['photo']['name']!==''){
            $name=upload($target_dir,'photo');
            $data=array_merge($data,['photo'=>$name]);
        }
//        JobSeeker::create($data);
        JobSeeker::updateOrCreate(['user_id'=>auth()['id']],$data);
        return success('Add Job Seeker Detail','Succesful add Detial');
    }
}