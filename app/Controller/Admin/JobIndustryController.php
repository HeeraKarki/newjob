<?php

namespace App\Controller\Admin;

use App\Models\Setting\JobIndustry;
use Core\Request;

class JobIndustryController
{
    public function index(){
        $data['jobindustries']=Jobindustry::all();
        return view('admin/JobIndustry/index',$data);
    }

    public function create(){
        if (Request::post('name')===''){
            return error('Error','Please fill the jobindustry name','Admin/JobIndustry');
        }
        JobIndustry::create([
            'name'=>Request::post('name')
        ]);

        return success('Successful',"jobindustry ".Request::post('name').' was added','Admin/JobIndustry');
    }


    public function delete(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
           return error('Error!','ID isn\'t set','Admin/JobIndustry');
        };

        $id=Request::get('id');
        JobIndustry::destroy($id);
        success('Successfully',"jobindustry Deleted",'Admin/JobIndustry');
    }


    public function edit(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
            return error('Error!','ID isn\'t set','Admin/JobIndustry');
        };

        $id=Request::get('id');
        $data['edit_data']=jobindustry::find($id);
        $data['jobindustry']=jobindustry::all();

        if($data['edit_data'] !== null){
            view('admin/jobindustry/edit',$data);
        }else{
            return error('Error','ID is not found on database','Admin/JobIndustry');
        }


    }

    public function update(){
        if (Request::post('name')===''){
            return error('Error','Please fill the jobindustry name','Admin/JobIndustry');
        }


        $update=jobindustry::findOrFail(Request::post('id'));
        $update->update([
            'name'=>Request::post('name')
        ]);
        return success('Edit Success','jobindustry '.Request::post('name').' has been updated.','Admin/JobIndustry');
    }
}