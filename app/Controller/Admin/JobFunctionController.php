<?php

namespace App\Controller\Admin;

use App\Models\Setting\JobFunction;
use Core\Request;

class JobFunctionController
{
    public function __construct()
    {
        if (!is_admin()){
            return error('Error!',"You don't have permission to access this page",'Logout');
        }
    }

    public function index(){
        $data['jobfunctions']=Jobfunction::all();
        return view('admin/jobfunction/index',$data);
    }

    public function create(){
        if (Request::post('name')===''){
            return error('Error','Please fill the jobfunction name','Admin/jobfunction');
        }
        Jobfunction::create([
            'name'=>ucfirst(Request::post('name'))
        ]);

        return success('Successful',"jobfunction ".Request::post('name').' was added','Admin/JobFunction');
    }


    public function delete(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
           return error('Error!','ID isn\'t set','Admin/jobfunction');
        };

        $id=Request::get('id');
        Jobfunction::destroy($id);
        success('Successfully',"jobfunction Deleted",'Admin/JobFunction');
    }


    public function edit(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
            return error('Error!','ID isn\'t set','Admin/jobfunction');
        };

        $id=Request::get('id');
        $data['edit_data']=Jobfunction::find($id);
        $data['jobfunctions']=Jobfunction::all();

        if($data['edit_data'] !== null){
            view('admin/jobfunction/edit',$data);
        }else{
            return error('Error','ID is not found on database','Admin/jobfunction');
        }


    }

    public function update(){
        if (Request::post('name')===''){
            return error('Error','Please fill the jobfunction name','Admin/Jobfunction');
        }


        $update=jobfunction::findOrFail(Request::post('id'));
        $update->update([
            'name'=>Request::post('name')
        ]);
        return success('Edit Success','jobfunction '.Request::post('name').' has been updated.','Admin/JobFunction');
    }


}