<?php

namespace App\Controller\Seed;


use App\Models\Setting\JobIndustry;
use App\Models\User\Employer;
use App\Models\User\JobSeeker;
use Core\Helper\Hash;
use App\Models\User\Role;
use App\Models\User\User;
use App\Models\Setting\Location;
use App\Models\Setting\JobFunction;
use App\Models\Setting\ContractType;
use App\Controller\Admin\HelperTrait;

class make
{
    use HelperTrait;
    public function UserSeeder(){

        $users=$this->loadJson('restore','users.json');
        foreach ($users as $user){
            User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'role_id'=>$user->role_id,
                'isactive'=>$user->isactive,
                'password'=>Hash::make('123456'),

            ]);
        }

//        User::create([
//            'name'=>'jargyi',
//            'email'=>'evokyaw@gmail.com',
//            'role_id'=>1,
//            'isactive'=>true,
//            'password'=>Hash::make('jarjar')
//            ]);
//        User::create([
//            'name'=>'heera',
//            'email'=>'heera@gmail.com',
//            'role_id'=>2,
//            'isactive'=>true,
//            'password'=>Hash::make('jarjar')
//        ]);
    }

    public function RoleSeeder(){
        Role::create(['name'=>'admin' ]);
        Role::create(['name'=>'jobseeker' ]);
        Role::create(['name'=>'employer' ]);
    }

    public function LoctionSeeder(){
        $locations=$this->loadJson('restore','locations.json');
        foreach ($locations as $location){
            Location::create([
                'name'=>$location->name
            ]);
        }
    }

    public function Contract_typeSeeder(){
        $con_types=$this->loadJson('restore','contract_types.json');
        foreach ($con_types as $con_type){
            ContractType::create([
                'name'=>$con_type->name
            ]);
        }
    }


    public function Job_Function_Seeder(){
        $jobs=$this->loadJson('restore','job_funs.json');

        foreach ($jobs as $job){
            JobFunction::create([
                'name'=>$job->name
            ]);
        }
    }


    public function Job_Industry_Seeder(){
        $jobs=$this->loadJson('restore','job_ind.json');

        foreach ($jobs as $job){
            JobIndustry::create([
                'name'=>$job->name,
                'img'=>$job->img
            ]);
        }
    }

    public function Employer_Seeder(){
        $employers=$this->loadJson('restore','employers.json');

        foreach ($employers as $employer){
            Employer::create([
                'company_name'=>$employer->company_name,
                'address'=>$employer->address,
                'phone_no'=>$employer->phone_no,
                'description'=>$employer->description,
                'no_of_employee'=>$employer->no_of_employee,
                'location_id'=>$employer->location_id,
                'website'=>$employer->website,
                'facebook'=>$employer->facebook,
                'twitter'=>$employer->twitter,
                'googleplus'=>$employer->googleplus,
                'user_id'=>$employer->user_id,
            ]);
        }
    }

    public function Job_Seekers_Seeder(){
        $jobseekers=$this->loadJson('restore','jobseekers.json');

        foreach ($jobseekers as $jobseeker){
            JobSeeker::create([
                'fullname'=>$jobseeker->fullname,
                'father_name'=>$jobseeker->father_name,
                'mother_name'=>$jobseeker->mother_name,
                'date_of_birth'=>$jobseeker->date_of_birth,
                'birth_place'=>$jobseeker->birth_place,
                'nationality'=>$jobseeker->nationality,
                'nrc_no'=>$jobseeker->nrc_no,
                'address'=>$jobseeker->address,
                'phone_no'=>$jobseeker->phone_no,
                'gender'=>$jobseeker->gender,
                'user_id'=>$jobseeker->user_id,
            ]);
        }
    }

}