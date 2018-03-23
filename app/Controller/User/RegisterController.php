<?php

namespace App\Controller\User;

use Core\Request;
use Core\Helper\Hash;
use Core\Helper\Mail;
use Core\Helper\Session;
use App\Models\User\User;
use Illuminate\Support\Str;

class RegisterController
{
    public function Signup(){
        if(Request::post('username')===""){
            Session::error('Error','Fill user name'); 
            return redirect();
        } 
        if(Request::post('email')===""){
            Session::error('Error','Fill email'); 
            return redirect();
        } 
        
        if(Request::post('password')===""){
            Session::error('Error','Fill password'); 
            return redirect();
        }

        if(Request::post('role_id')===""){
            Session::error('Error','Select the usertype'); 
            return redirect();
        };
        $token=Str::random(60);
        User::create([
            'name'=>Request::post('username'),
            'email'=>Request::post('email'),
            'password'=> Hash::make(Request::post('password')),
            'role_id'=>Request::post('role_id'),
            'token'=>$token,
            'isactive'=>false,
        ]);

        $link=Request::post('role_id')==1?basurl("Activation/Job_seeker/$token"):baseurl("Activation/Employer/$token");

        $mail= new Mail();
        // $mail::send([
        //     'to'=>'heerakarki99@gmail.com',
        //     'subject'=>'Form Custom',
        //     'body'=>"<h1 style='width: 100%;height: 20px; background-color: chartreuse'>This is Good</h1>",
        //     'sender'=>'admin'
        // ]);

        $mail::send([
            "to"=>Request::post('email'),
            "subject"=>"Click to activate the user account",
            "body"=>"<a href='".$link."'>Click the link</a>",
            'sender'=>'admin'
        ]);

        return redirect();

    }
}