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

        $this->table->roleTable();
        $this->table->userTable();
        $this->table->locationtable();
        $this->table->Postiontable();
        $this->table->jobfunctionstable();
        $this->table->employertable();
        $this->table->job_seekertable();
        $this->table->SeekerQualificationtable();
        $this->table->SeekerExperiencetable();
        $this->table->ContractTypeTable();
        
        redirect('Admin/Setup');
    }

}