<?php

namespace Core\Helper;


class Hash
{
    public static function make($data){
        return password_hash($data,PASSWORD_DEFAULT);
    }

    public static function verify($password,$hashpassword){
        return password_verify($password, $hashpassword);
    }
}