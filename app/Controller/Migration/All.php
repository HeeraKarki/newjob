<?php

namespace App\Controller\Migration;

class All
{
    protected $table;
    public function __construct()
    {
        $this->table= new TableCreate();
    }

    public function call(){
        $this->table->dropall();
        $this->table->userTable();
        $this->table->todoTable();
        $this->table->roleTable();
        $this->table->userRoleTable();
        $this->table->jobtable();




        redirect('Admin/Setup');
    }

}