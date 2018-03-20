<?php

namespace App\Controller\Seed;


use Core\Helper\Hash;
use App\Models\User\Role;
use App\Models\User\User;

class make
{
    public function UserSeeder(){
        User::create([
            'name'=>'jargyi',
            'email'=>'evokyaw@gmail.com',
            'password'=>Hash::make('jar')
            ]);
    }

    public function RoleSeeder(){
        Role::create(['name'=>'admin' ]);
        Role::create(['name'=>'jobseeker' ]);
        Role::create(['name'=>'employer' ]);
    }
}