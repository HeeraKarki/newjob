<?php
namespace Core;

class Request
{
    public static function uri($server_address){
        $uri=trim($_SERVER['REQUEST_URI'],'/ ');
        $uri_arr=explode('/',$server_address);
        unset($uri_arr[0]);
        $server=implode('/',$uri_arr);
         return trim(
             parse_url(str_replace($server,'',$uri),PHP_URL_PATH)
             ,'/');

    }

    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function get($key){
        if ($key === ''){
            $get=[];
            foreach ($_GET as $key=>$value){
                $get[$key]=sanitize($value);
            }
            return collect($get);
        }
        return sanitize($_GET[$key]);
    }

    public static function post($key=''){
        if ($key === ''){
            $post=[];
            foreach ($_POST as $key=>$value){
                $post[$key]=sanitize($value);
            }
            return collect($post);
        }
        return sanitize($_POST[$key]);
    }

    public static function any($key=''){
        if ($key === ''){
            $post=[];
            foreach ($_REQUEST as $key=>$value){
                $post[$key]=sanitize($value);
            }
            return collect($post);
        }
        return sanitize($_REQUEST[$key]);
    }

}