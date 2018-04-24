<?php

namespace App\Controller\User;

use App\Models\Job\JobPost;
use App\Models\Setting\JobIndustry;
use App\Models\Setting\Location;
use Core\Request;
use Core\Helper\Hash;
use Core\Helper\Auth;
use App\Models\User\User;
use App\Models\User\Role;
use Illuminate\Support\Str;

class HomeController
{
    public function home(){
        $data['job_industries']=JobIndustry::all();
        $data['locations']=Location::all();
        $data['job_posts']=JobPost::inRandomOrder()->take(10)->get();
        return view('job/home',$data);
    }


    public function Login(){
        if(!auth_check()){
            return view('job/login');
        }else{
            return redirect('/');
        }
    }


    public function Register(){
        return view('job/register');
    }
}