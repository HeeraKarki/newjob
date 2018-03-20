<?php
namespace App\Controller;
use Core\App;
use Illuminate\Database\Capsule\Manager;

class SetupController
{
    public function index(){
        $data['config']=App::get('config');
        return view('setup',$data);
    }
    public function migration(){
        Manager::schema()->dropIfExists('todos');
        Manager::schema()->create('todos',function ($table){
           $table->increments('id');
           $table->string('description');
           $table->boolean('completed');
           $table->timestamps();
        });
    }
}