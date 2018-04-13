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
    protected function checkempty($data){
        if (Request::post($data) === ''|| Request::post($data) === null){
            Session::error('Error','Required '.ucfirst($data));
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
    }
    public function Signup(){

        if (checkpost('name')){
            return error('Invalid Username','Fill the username');
        }
        if (checkpost('email')){
            return error('Invalid Email','Fill the Email Address');
        }

        if (checkpost('password')){
            return error('Invalid Password','Fill the Password');
        }


        $token=Str::random(60);
        $role_id=Request::post('role_id');
        $link=baseurl("Activation?token=$token");
    
        
        User::create([
            'name'=>Request::post('name'),
            'email'=>Request::post('email'),
            'password'=> Hash::make(Request::post('password')),
            'role_id'=>Request::post('role_id'),
            'token'=>$token,
            'isactive'=>false,
        ]);

        $mail= new Mail();

        $mail::send([
            "to"=>Request::post('email'),
            "subject"=>"Click to activate the user account",
            "body"=>"<a href='".$link."' style='background-color: #00a651;height: 50px;padding-top: 20px; color: #fff; display: block; width: 100%; font-size: 14px;white-space: nowrap;vertical-align: middle; text-align: center;'>Click the link</a>",
            'sender'=>'admin'
        ]);

    
        return success('Completed',"Please activate the user account from email.");

    }

    public function activation(){
        // return \view('job/activation/jobseeker');
        $token=Request::get("token");
        $check=User::where("token",$token)
        ->where("isactive","!=","1")
        ->first();
        if($check!==null){
            $check->update([
                "token"=>null,
                "isactive"=>true
            ]);
            return success('Activated','Your Account '.$check->email.' has been activated. Login Now!','Login');
        } else {
            \error('Error','Your account is already activated','Login');
        }
        

    }



}