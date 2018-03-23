<?php

namespace App\Controller\Seed;


use Core\Helper\Hash;
use App\Models\User\Role;
use App\Models\User\User;
use Illuminate\Database\Capsule\Manager;

class make
{
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
}