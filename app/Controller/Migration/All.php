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
        $this->table->jobfunctionstable();
        $this->table->employertable();
        $this->table->job_seekertable();
        $this->table->SeekerEducationtable();
        $this->table->SeekerExperiencetable();
        $this->table->SeekerQualificationsTable();
        $this->table->SeekerLanguagesTable();
        $this->table->ContractTypeTable();
        $this->table->JobIndustryTable();
        $this->table->CareerObjectTable();
        $this->table->JobPostTable();


        
        redirect('Admin/Setup');
    }

}