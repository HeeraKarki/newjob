<?php
namespace App\Controller\Admin;


use App\Models\Setting\ContractType;
use Core\Request;

class ContractTypeController
{

    public function __construct()
    {
        if (!is_admin()){
            return error('Error!',"You don't have permission to access this page",'Logout');
        }
    }

    public function index(){
        $data['con_types']=ContractType::all();
        return view('admin/ContactType/index',$data);
    }


    public function create(){
        if (Request::post('name')===''){
            return error('Error','Please fill the Contract Type','Admin/Contract_type');
        }
        ContractType::create([
            'name'=>Request::post('name')
        ]);

        return success('Successful',"Location ".Request::post('name').' was added','Admin/Contract_type');
    }


    public function delete(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
            return error('Error!','ID isn\'t set','Admin/Contract_type');
        };

        $id=Request::get('id');
        ContractType::destroy($id);
        success('Successfully',"Contact Type Deleted",'Admin/Contract_type');
    }


    public function edit(){
        if (!isset($_GET['id'])  ||  $_GET['id']===''){
            return error('Error!','ID isn\'t set','Admin/Contract_type');
        };

        $id=(int)Request::get('id');
        $data['edit_data']=ContractType::find($id);
        $data['con_types']=ContractType::all();

        if($data['edit_data'] !== null){
            view('admin/ContactType/edit',$data);
        }else{
            return error('Error','ID is not found on Contact Type Table','Admin/Contract_type');
        }


    }

    public function update(){

        if (Request::post('name')===''){
            return error('Error','Please fill the Contact Type name','Admin/Contract_type');
        }


        $update=ContractType::findOrFail(Request::post('id'));
        $update->update([
            'name'=>Request::post('name')
        ]);
        return success('Edit Success',' Contact Type '.Request::post('name').' has been updated.','Admin/Contract_type');
    }

}