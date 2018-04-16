<?php
namespace App\Controller\User;


use App\Models\Setting\Location;
use App\Models\User\Employer;
use App\Models\User\User;
use Core\Request;

class EmployerController
{
    public function index(){
        $data['locations']=Location::all();
        $data['user_details']=User::where('id',auth()['id'])->first();
        return view('user/empolyer/index',$data);
    }

    public function add(){
        $target_dir = "data/user/".auth()['id'].'/';
        $data=[
            'company_name' => Request::post('company_name'),
            'address' => Request::post('address'),
            'phone_no' => Request::post('phone_no'),
            'description' => Request::post('description'),
            'no_of_employee' => Request::post('no_of_employee'),
            'location_id' => Request::post('location_id'),
            'website' => Request::post('website'),
            'facebook' => Request::post('facebook'),
            'twitter' => Request::post('twitter'),
            'googleplus' => Request::post('googleplus')
        ];
        if (isset($_FILES['photo']) && $_FILES['photo']['name']!==''){
            $name=upload($target_dir,'photo');
            $data=array_merge($data,['avatar'=>$name]);
        }

        if (isset($_FILES['logo']) && $_FILES['logo']['name']!==''){
            $name=upload($target_dir,'logo');
            $data=array_merge($data,['logo'=>$name]);
        }

        Employer::updateOrCreate(['user_id'=>auth()['id']],$data);
        return success('Add Company Detail','Succesful Add Detial');
    }
}