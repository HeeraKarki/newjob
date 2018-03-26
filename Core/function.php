<?php
function dde($data){
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function baseurl($link=''){
    $home=\Core\App::get('config');
    return 'http://'.$home['server'].'/'.$link;
}

function view($filename,$data=[],$extension=null){
    $extension=$extension===null?'.view.php':$extension.'.php';

    $redir_uri=\Core\Request::uri(\Core\App::get('config')['server']);
    extract($data);
    return require "app/view/{$filename}{$extension}";
}

function asset($file){
    return baseurl().'/public/'.$file;
}

function flash($key){
    if ($data=\Core\Helper\Session::flush($key)){
        return $data;
    }else{
        return false;
    }
}

function error($title,$message,$link=null){
    Core\Helper\Session::error($title,$message); 
    return redirect($link);
}

function success($title,$message,$link=null){
    Core\Helper\Session::success($title,$message); 
    return redirect($link);
}


function checkpost($key){
    if (\Core\Request::post($key) ==='' || \Core\Request::post($key) === null || empty(\Core\Request::post($key))){
        return true;
    }else{
        return false;
    }
}

function url_parms($key){
    $url_array=explode('/',\Core\Request::uri(\Core\App::get('config')['server']));
    if (isset($url_array[$key])){
        return $url_array[$key];
    }else{
        return null;
    }
}


function redirect($path=null){
    if ($path!==null){
        return header("Location: ".baseurl($path));
    }
    return header("Location: {$_SERVER['HTTP_REFERER']}");
}
function view_require($input){
    return require "app/view/{$input}.php";
}
function cleanInput($input) {

    $search = array(
        "@<script[^>]*?>.*?</script>@si",   // Strip out javascript
        "@<[\/\!]*?[^<>]*?>@si",            // Strip out HTML tags
        "@<style[^>]*?>.*?</style>@siU",    // Strip style tags properly
        "@<![\s\S]*?--[ \t\n\r]*>@"         // Strip multi-line comments
    );

    $output = preg_replace($search, '', $input);
    return $output;
}

function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
    }
    return $input;
}
