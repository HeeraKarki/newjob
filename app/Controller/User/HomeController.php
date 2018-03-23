<?php

namespace App\Controller\User;

use Core\Request;
use Core\Helper\Hash;
use Core\Helper\Auth;
use App\Models\User\User;
use Illuminate\Support\Str;

class HomeController
{
    public function home(){
        return view('job/home');
    }


    public function Login(){
        return view('job/login');
    }


    public function Register(){
        return view('job/register');
    }


    public function Signup(){
        $data=[
            'name'=>Request::post('username'),
            'email'=>Request::post('email'),
            'password'=>Hash::make(Request::post('username')),
            'token'=>Str::random(30),
            'isactive'=>false
        ];
        $user=User::create($data);
        Auth::login($user);
        \redirect();

    }
}