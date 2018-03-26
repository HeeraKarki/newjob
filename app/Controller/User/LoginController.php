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
        if (checkpost('email')){
            return error('Invalid Email','Fill the Email Field.');
        }
        if (checkpost('password')){
            return error('Invalid Password','Fill the Password Field.');
        }

        //Get User Data and init new User Object
        $userdata = User::where('email', Request::post('email'))->first();

        //Check Email exists
        if($userdata === null){
            return \error("Error!",'Email Address doesn\'t exist.');
        }

        //Hash Password Verify
        if (Hash::verify(Request::post('password'), $userdata->password)) {
            //Check User has role admin.
            if ($userdata->hasrole('admin')) {
                Session::set(['isAdmin'=>true]);
                Auth::login($userdata);
                redirect('Admin/Dashboard');
            }else{
                if ($userdata->isactive){
                    Auth::login($userdata);
                    redirect('User/Profile');
                }else{
                    error('Error!', 'Your Account Need to be activation.');
                }
            }
        }else{
            error("Check Password!","Password doesn't match.");
        }
    }

}
