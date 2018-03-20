<?php

namespace App\Controller\Migration;

use Illuminate\Database\Capsule\Manager as Make;

class TableCreate
{
    public function dropall(){
        Make::schema()->dropAllTables();
    }
    public function userTable(){
        Make::schema()->create('users',function ($table){
            $table->increments('id');
            $table->string('name');
            $table->string('email',50);
            $table->string('password');
            $table->string('token')->nullable();
            $table->boolean('isactive')->default(false);
            $table->timestamps();

        });
    }

    public function todoTable(){
        Make::schema()->create('todos',function ($table){
            $table->increments('id');
            $table->string('description',30);
            $table->boolean('completed');
            $table->timestamps();
        });
    }

    public function roleTable()
    {
        Make::schema()->create('roles', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function userRoleTable(){
        Make::schema()->create('user_roles',function ($table){
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('role_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    public function jobtable(){
        Make::schema()->create('jobs',function ($table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }



}