<?php
namespace Core\Helper;


class Auth
{
    protected static $userdata;
    protected static $userkey='userdata';

    public static function check(){
        if(!Session::has('islogin')){
            return false;
//            throw new \Exception('User is not Loging');
        }else{
            return true;
        }
    }

    public static function id (){
        if (Session::all()->isNotEmpty()){
            return Session::get(static::$userkey)['id'];
        }else{
            throw new \Exception('User is not Login.');
        }
    }

    public static function data(){
        if (static::check()){
            return static::$userdata=Session::get(static::$userkey);
        }else{
            error('Error!','User is not Login','Login');
//            throw new \Exception('User is not Login.');
        }
    }

    public static function login($data){
        Session::set([
            'islogin'=>true,
            'userdata'=>$data
//            'userdata'=>collect($data)
        ]);
    }

    public static function logout($link=''){
        Session::destroy();
        redirect($link);
    }
}