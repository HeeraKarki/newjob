<?php

namespace App\Controller\Seed;


use App\Models\Setting\JobIndustry;
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
        User::create([
            'name'=>'jargyi',
            'email'=>'evokyaw@gmail.com',
            'role_id'=>1,
            'isactive'=>true,
            'password'=>Hash::make('jarjar')
            ]);
        User::create([
            'name'=>'heera',
            'email'=>'heera@gmail.com',
            'role_id'=>2,
            'isactive'=>false,
            'password'=>Hash::make('jarjar')
        ]);
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
                'name'=>$job->name
            ]);
        }
    }

}