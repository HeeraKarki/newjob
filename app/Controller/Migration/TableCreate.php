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
            $table->text('address');
            $table->string('phone_no');
            $table->text('description');
            $table->integer('no_of_employee');
            $table->string('website');
            $table->text('logo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('googleplus')->nullable();
            $table->text('avatar')->nullable();
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


    public function jobfunctionstable()
    {
        Make:: schema()->create('job_functions',function($table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });
    }
    public function job_seekertable(){
        Make::schema()->create('job_seekers',function ($table){
            $table->increments('id');
            $table->string('fullname');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('date_of_birth');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('nrc_no');
            $table->text('address');
            $table->string('phone_no');
            $table->boolean('gender');
            $table->text('photo')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }
    public function SeekerEducationtable(){
        Make::schema()->create('seeker_educations',function ($table){
            $table->increments('id');
            $table->string('institute_name');
            $table->string('degree');
            $table->date('form');
            $table->date('to');
            $table->text('description');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }
    public function SeekerExperiencetable(){
        Make::schema()->create('seeker_experiences',function ($table){
            $table->increments('id');
            $table->text('company_name');
            $table->string('designation');
            $table->date('post_from_date');
            $table->date('post_to_date');
            $table->text('description');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    public function SeekerQualificationsTable(){
        Make::schema()->create('seeker_qualifications',function ($table){
            $table->increments('id');
            $table->text('txt');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    public function SeekerLanguagesTable(){
        Make::schema()->create('seeker_languages',function ($table){
            $table->increments('id');
            $table->text('name');
            $table->float('rating');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }


    public function ContractTypeTable(){
        Make::schema()->create('contract_types',function ($table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function CareerObjectTable(){
        Make::schema()->create('career_objectives',function ($table){
            $table->increments('id');
            $table->text('txt');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }


    public function JobIndustryTable(){
        Make::schema()->create('job_industries',function ($table){
            $table->increments('id');
            $table->string('name');
            $table->text('img');
            $table->timestamps();
        });
    }
    

}
