<?php
/**
 * Created by PhpStorm.
 * User: bkj
 * Date: 4/23/18
 * Time: 2:07 AM
 */

namespace App\Controller\Admin;


use App\Models\User\User;
use Core\Helper\Hash;
use Core\Request;

class AdminUserController
{
    public function __construct()
    {
        if (!is_admin()){
            return error('Error!',"You don't have permission to access this page",'Logout');
        }
    }

    public function index(){
        $data['admins']=User::where('role_id',1)->get();
        return view('admin/admin_user/index',$data);
    }

    public function create(){

        if (Request::post('name')==='' || Request::post('email')==='' || Request::post('password')=== ''){
            return error('Error','Please fill the jobfunction name');
        }
        try{
            $user=User::create([
                'name'=>Request::post('name'),
                'email'=>Request::post('email'),
                'password'=> Hash::make(Request::post('password')),
                'role_id'=>1,
                'isactive'=>true,
            ]);
        }catch (\Exception $exceptione){
            return error('Error!','Email is Already Exists');
        }

        return success('Successful',"Admin  ".Request::post('name').' was added');
    }


    public function delete(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
            return error('Error!','ID isn\'t set');
        };

        $id=Request::get('id');
        User::destroy($id);
        success('Successfully',"Admin Deleted");
    }


    public function edit(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
            return error('Error!','ID isn\'t set','Admin/jobfunction');
        };

        $id=Request::get('id');
        $data['edit_data']=User::find($id);
        $data['admins']=User::where('role_id',1)->get();

        if($data['edit_data'] !== null){
            return view('admin/admin_user/edit',$data);
        }else{
            return error('Error','ID is not found on database','Admin/jobfunction');
        }


    }

    public function update(){
        if (Request::post('name')==='' || Request::post('email')==='' || Request::post('password')=== ''){
            return error('Error','Please fill the jobfunction name');
        }


        $update=User::findOrFail(Request::post('id'));

        try{
            $update->update([
                'name'=>Request::post('name'),
                'email'=>Request::post('email'),
                'password'=> Hash::make(Request::post('password')),
                'role_id'=>1,
                'isactive'=>true,
            ]);
        }catch (\Exception $exception){
            return error('Error!','Email is Already Exists');
        }

        return success('Edit Success','Amin '.Request::post('name').' has been updated.');
    }

}