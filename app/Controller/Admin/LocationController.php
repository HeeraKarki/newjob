<?php

namespace App\Controller\Admin;


use App\Models\Setting\Location;
use Core\Request;
use Illuminate\Filesystem\Filesystem;

class LocationController
{
    public function index(){
        $data['locations']=Location::all();
        return view('admin/location/index',$data);
    }


    public function create(){
        if (Request::post('name')===''){
            return error('Error','Please fill the location name','Admin/Location');
        }
        Location::create([
            'name'=>Request::post('name')
        ]);

        return success('Successful',"Location ".Request::post('name').' was added','Admin/Location');
    }


    public function delete(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
           return error('Error!','ID isn\'t set','Admin/Location');
        };

        $id=Request::get('id');
        Location::destroy($id);
        success('Successfully',"Locations Deleted",'Admin/Location');
    }


    public function edit(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
            return error('Error!','ID isn\'t set','Admin/Location');
        };

        $id=Request::get('id');
        $data['edit_data']=Location::find($id);
        $data['locations']=Location::all();

        if($data['edit_data'] !== null){
            view('admin/location/edit',$data);
        }else{
            return error('Error','ID is not found on database','Admin/Location');
        }


    }

    public function update(){

        if (Request::post('name')===''){
            return error('Error','Please fill the location name','Admin/Location');
        }


        $update=Location::findOrFail(Request::post('id'));
        $update->update([
            'name'=>Request::post('name')
        ]);
        return success('Edit Success','Location '.Request::post('name').' has been updated.','Admin/Location');
    }
}