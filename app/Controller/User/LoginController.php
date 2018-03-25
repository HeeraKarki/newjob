<?php

namespace App\Controller\User;

use App\Models\User\User;
use Core\Helper\Auth;
use Core\Helper\Hash;
use Core\Helper\Session;
use Core\Request;

class LoginController
{
    public function Check()
    {
        if(Request::post('email')==""){
            return \error("Error!",'Fill email address .','Login');
        }
        if(Request::post('password')==""){
            return \error("Error!",'Fill password .','Login');
        }

        //Get User Data and init new User Object
        $userdata = User::where('email', Request::post('email'))->first();

        //Check Email exists
        if($userdata === null){
            return \error("Error!",'Email Address doesn\'t exist.','Login');
        }

        //Hash Password Verify
        if (Hash::verify(Request::post('password'), $userdata->password)) {
            //Check User has role admin.
            if ($userdata->hasrole('admin')) {
                Session::set(['isAdmin'=>true]);
                Auth::login($userdata);
                redirect('Admin');
            }else{
                if ($userdata->isactive !== 0){
                    Auth::login($userdata);
                    redirect();
                }else{
                    Session::error('Error!', 'Your Account Need to be activation.');
                    redirect();
                }
            }
        }else{
            Session::error("Check Password!","Password doesn't match." );
            redirect();
        }
    }

}
