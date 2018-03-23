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
        //Get User Data and init new User Object
        $userdata = User::where('email', Request::post('email'))->first();

        //Hash Password Verify
        if (Hash::verify(Request::post('password'), $userdata->password)) {
            if ($userdata->hasrole('admin')) {
                Session::set(['isAdmin',true]);
                Auth::login($userdata);
                redirect('Admin');
            }else{
                if ($userdata->isactive !== 0){
                    Auth::login($userdata);
                    redirect();
                }else{
                    Session::error('Error!', 'You Account Need to be activation.');
                    redirect();
                }
            }


        }

//        Session::set(['error'=>"This is fuck"]);

//        redirect();
    }

}
