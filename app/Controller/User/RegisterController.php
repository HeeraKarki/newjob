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
            return \error("TITLE",'Required Username','Register');
        }
        if(Request::post('email')===""){
            return \error("TITLE",'Required Username','Register');
        }
        if(Request::post('password')===""){
            return \error("TITLE",'Required Username','Register');
        }
        if(Request::post('role_id')===""){
            return \error("TITLE",'Required Username','Register');
        }

        $token=Str::random(60);
        $role_id=Request::post('role_id');
        $link=Request::post('role_id')==="2"?\baseurl("Activation?for=$role_id&token=$token"):\baseurl("Activation?for=$role_id&token=$token");
    
        
        User::create([
            'name'=>Request::post('username'),
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
            "body"=>"<a href='".$link."'>Click the link</a>",
            'sender'=>'admin'
        ]);

    
        return success('Completed',"Please activate the user account from email.",'Register');

    }

    public function activation(){
        // return \view('job/activation/jobseeker');
        $token=Request::get("token");
        $role_id=Request::get("for");
        $check=User::where("token",$token)
        ->where("role_id",$role_id)
        ->where("isactive","!=","1")
        ->first();
        if($check!==null){
            $check->update([
                "token"=>null,
                "isactive"=>true
            ]);

            if($role_id=="2"){
                return \view('job/activation/jobseeker');
            }else{
                return \view('job/activation/employer');
            }
        }
        else {
            \error('Error','Your account is already activated','Login');
        }
        

    }



}