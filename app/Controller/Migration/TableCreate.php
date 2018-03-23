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
            $table->unsignedInteger('role_id');
            $table->boolean('isactive')->default(false);
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE')->onUpdate('CASCADE');
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

    public function employertable(){
        Make::schema()->create('employers',function ($table){
            $table->increments('id');
            $table->string('company_name');
            $table->text('address_1');
            $table->text('address_2');
            $table->string('phone_no');
            $table->text('description');
            $table->integer('no_of_employee');
            $table->string('website');
            $table->text('logo');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('user_id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }
    public function locationtable()
    {
        Make:: schema()->create('locations',function($table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });
    }
    

    public function Postiontable()
    {
        Make:: schema()->create('positions',function($table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });
    }

    public function jobfunctionstable()
    {
        Make:: schema()->create('job_functions',function($table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });
    }
    public function job_seekertable(){
        Make::schema()->create('job_seeker',function ($table){
            $table->increments('id');
            $table->text('address');
            $table->string('phone_no');
            $table->string('date_of_birth');
            $table->boolean('gender');
            $table->string('Nationality');
            $table->string('nrc_no',30);
            $table->string('workexperience');
            $table->text('photo');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }
    public function SeekerQualificationtable(){
        Make::schema()->create('seeker_qualification',function ($table){
            $table->increments('id');
            $table->text('name3');
            $table->date('qualification_date');
            $table->text('qualification_image_front');
            $table->text('qualification_image_back');
            $table->unsignedInteger('job_seeker_id');
            $table->foreign('job_seeker_id')->references('id')->on('job_seeker')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }
    public function SeekerExperiencetable(){
        Make::schema()->create('seeker_experience',function ($table){
            $table->increments('id');
            $table->text('position');
            $table->string('description');
            $table->date('post_from_date');
            $table->date('post_to_date');
            $table->unsignedInteger('job_seeker_id');
            $table->foreign('job_seeker_id')->references('id')->on('job_seeker')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }


}
