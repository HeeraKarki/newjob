<?php

namespace Core\Helper;


class Session
{
    public static function has($key){
        return isset($_SESSION[$key])?true:false;
    }

    public static function set(array $array){
        foreach($array as $key=>$val){
            $_SESSION[$key]=$val;
        }
    }

    public static function all(){
        return collect($_SESSION);
    }

    public static function get($key){
        return $_SESSION[$key];
    }

    public static function delete($key){
        unset($_SESSION[$key]);
    }

    public static function destroy(){
        return session_destroy();
    }

}