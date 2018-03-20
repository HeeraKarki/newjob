<?php

namespace Core\Helper;


use Core\App;
use Core\Request;

class View
{
    public static function make($filename,$data=[],$extension=null){
        $extension=$extension===null?'.view.php':$extension.'.php';

        $redir_uri=Request::uri(App::get('config')['server']);
        extract($data);
        return require "app/view/{$filename}{$extension}";
    }

}