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

function redirect($path=null){
    if ($path!==null){
        return header("Location: ".baseurl($path));
    }
    return header("Location: {$_SERVER['HTTP_REFERER']}");
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
