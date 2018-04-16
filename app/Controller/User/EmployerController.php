<?php
namespace App\Controller\User;


use App\Models\User\Employer;

class EmployerController
{
    public function index(){
        return view('user/empolyer/index');
    }

    public function add(){
        Employer::create();
    }
}