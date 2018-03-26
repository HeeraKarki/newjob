<?php
namespace App\Controller\Admin;

use Illuminate\Filesystem\Filesystem;

class AdminController
{


    public function index(){
        return view('admin/dashboard');
    }
    protected function makeconfig(){
        $file= new Filesystem();
        $da=$file->getRequire('config.php');
        $php="<?php return [";
        $php.="'server'=>'{$da['server']}'";
        $php.=",'database'=>[";
        $php.="'host' => {$da['database']['host']},";
        $php.="'db_name' => {$da['database']['db_name']},";
        $php.="'username' => {$da['database']['username']},";
        $php.="'password' => {$da['database']['password']}";
        $php.="]";

        $php.="];";
//        dd($php);
        $fds=$file->put('public/upload/1.php',$php);
//        $fds=$file->append($da);
    }
}
