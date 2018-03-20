<?php
namespace Core\Helper;


class Auth
{
    protected static $userdata;
    protected static $userkey='userdata';

    public static function check(){
        if(!Session::has('islogin')){
            throw new \Exception('User is not Loging');
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
            throw new \Exception('User is not Login.');
        }
    }

    public static function login($data){
        Session::set([
            'islogin'=>true,
            'userdata'=>collect($data)
        ]);
    }

    public static function logout($link=''){
        Session::destroy();
        redirect($link);
    }
}