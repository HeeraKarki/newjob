<?php
/**
 * Created by PhpStorm.
 * User: bkj
 * Date: 3/19/18
 * Time: 11:57 AM
 */

namespace App\Controller\Seed;


class All
{
    protected $seed;
    public function __construct()
    {
        $this->seed= new make();



        redirect('Admin/Setup');
    }

    public function call(){
        $this->seed->RoleSeeder();
        $this->seed->UserSeeder();
        $this->seed->LoctionSeeder();
        $this->seed->Contract_typeSeeder();

    }

}