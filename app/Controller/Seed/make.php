<?php

namespace App\Controller\Seed;


use App\Models\Job;
use App\Models\User;
use Core\Helper\Hash;

class make
{
    public function UserSeeder(){
        User::create([
            'name'=>'jargyi',
            'email'=>'evokyaw@gmail.com',
            'password'=>Hash::make('jar')
            ]);
    }

    public function JobSeeder(){
        Job::create([
           'name'=>'MD'
        ]);
    }
}