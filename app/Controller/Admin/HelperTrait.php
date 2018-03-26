<?php
/**
 * Created by PhpStorm.
 * User: bkj
 * Date: 3/26/18
 * Time: 11:07 PM
 */

namespace App\Controller\Admin;


use Illuminate\Filesystem\Filesystem;

trait HelperTrait
{
    protected function makeJson($path,$filename,$data){
        $file= new Filesystem();
        $path='public/'.$path;
        if (!$file->isDirectory($path)){
            $file->makeDirectory($path);
        }
        $file->put($path.'/'.$filename,$data);
    }

    protected function loadJson($path,$filename){
        $file= new Filesystem();
        return json_decode($file->get('public/'.$path.'/'.$filename));
    }
}