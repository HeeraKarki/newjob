<?php
namespace App\Controller\User;


use App\Models\Job\JobApplicant;
use App\Models\Job\JobPost;
use App\Models\Setting\ContractType;
use App\Models\Setting\JobFunction;
use App\Models\Setting\JobIndustry;
use App\Models\Setting\Location;
use App\Models\User\Employer;
use App\Models\User\EmployerBank;
use App\Models\User\User;
use Core\Helper\Auth;
use Core\Helper\Hash;
use Core\Helper\Mail;
use Core\Request;
use Illuminate\Support\Carbon;

class EmployerController
{
    public function __construct()
    {
        if (!Auth::check()){
            return error('Error! ','User is not Login...Please Login','Login');
        }
    }

    public function index(){
        $data['locations']=Location::all();
        $data['user_details']=User::find(auth()['id']);
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


    public function post_job(){
        $data['user']=User::find(\auth()['id']);
        if ( $data['user']->employer->id === null){
            return error('Job Post Error!','Your account profile is not completed.First Fill requirement.','User/Employer');
        };
        $data['job_functions']=JobFunction::all();
        $data['job_industries']=JobIndustry::all();
        $data['locations']=Location::all();
        $data['contract_types']=ContractType::all();

        return view('user/empolyer/postjob',$data);
    }

    public function post_job_add(){
        $data=[
            'title'=>Request::post('title'),
            'salary_min'=>Request::post('salary_min'),
            'salary_max'=>Request::post('salary_max'),
            'salary_type'=>Request::post('salary_type'),
            'deathline'=>date('Y-m-d',strtotime(Request::post('deathline'))),
            'responsibilities'=>Request::post('responsibilities'),
            'requirement'=>Request::post('requirement'),
            'experience'=>Request::post('experience'),
            'description'=>Request::post('description'),
            'location_id'=>Request::post('location_id'),
            'contract_type_id'=>Request::post('contract_type_id'),
            'employer_id'=>Request::post('employer_id'),
            'job_function_id'=>Request::post('job_function_id'),
            'job_industry_id'=>Request::post('job_industry_id')
        ];
        $employer=Employer::find(Request::post('employer_id'));
        if ($employer->post_count !==0){
            $employer->post_count=$employer->post_count-1;
            $employer->save();
            JobPost::create($data);
            return success('Add New Job','Successfully created a post.');
        }else{
            return error('Sorry!','You can\'t post.please buy post pack');
        }
    }

    public function packages(){
        $data['user']=User::find(\auth()['id']);
        if (isset($data['user']->employer)){
            return view('user/empolyer/packages',$data);
        }else{
            return error('Error!','Fill the Employer First Data');
        }


    }

    public function buy_post(){
        $employer=Employer::find(Request::post('employer_id'));

        if($employer->bank === null){
            return error('Error!','Your can not purchase now.Fill your bank account in profile.' );
        }

        $employer->increment('post_count',Request::post('post_count'));

        $bank=EmployerBank::where('employer_id',Request::post('employer_id'));
        $bank_amount=$bank->first()->amount;

        $price=[
            "5"=>20,
            "10"=>30,
            "20"=>50,
            "50"=>100,
        ];

        $b_price=$price[Request::post('post_count')];
        $bank->update(['amount'=>$bank_amount-$b_price]);
        $employer->order()->create(['amount'=>$b_price]);
        return success('Thank you','Post Count was added. ');
    }
    public function joblist(){
        $user=User::find(\auth()['id']);
        $data['user']=$user;
        if (isset($user->employer->id)){
            $employer_id=$user->employer->id;
            $data['job_posts']=JobPost::where('employer_id',$employer_id)->get();
            return view('user/empolyer/joblist',$data);
        }else{
            return error('Error!','Fill the Employer First Data');
        }

    }

    public function profile_detail(){
        $data['user']=User::find(\auth()['id']);
        if (isset($data['user']->employer)){
            return view('user/empolyer/profile',$data);
        }else{
            return error('Error!','Fill the Employer First Data');
        }
    }

    public function profile_update(){

        $user= User::find(Request::post('user_id'));
        $user->name=Request::post('name');
        $user->email=Request::post('email');
        $user->save();
       EmployerBank::updateOrCreate(['employer_id'=>$user->employer->id],['account_no'=>Request::post('account_no')]);
       return success('Success','Bank Account and Detail Updated.');
    }

    public function interview(){
        $id=Request::post('applicant_id');
        $applicant=JobApplicant::find($id);
        $applicant->interview_date=date('Y-m-d',strtotime(Request::post('interview_date')));
        $applicant->status='interview';
        $applicant->save();
        $mail= new Mail();

        $mail::send([
            "to"=>$applicant->job_seeker->user->email,
            "subject"=>"Interview request",
            "body"=>"Your have to attend the interview from employer",
            'sender'=>'admin'
        ]);
        return success('Make Interview','Accept to interview');
    }


    public function interview_pass(){
        $id=Request::get('applicant_id');
        $applicant=JobApplicant::find($id);
        $applicant->status='pass';
        $applicant->save();
        $mail= new Mail();

        $mail::send([
            "to"=>$applicant->job_seeker->user->email,
            "subject"=>"Interview Pass",
            "body"=>"Your are pass the interview from employer",
            'sender'=>'admin'
        ]);

        return success('Inteview Pass','Interview Pass.');
    }

    public function interview_fail(){
        $id=Request::get('applicant_id');
        $applicant=JobApplicant::find($id);
        $applicant->status='fail';
        $applicant->save();
        return success('Inteview Fail','Interview Fail.');
    }


    public function password_update(){
        if (checkpost('old_password')){
            return error('Invalid Old Password','Fill the Password');
        }

        if (checkpost('password')){
            return error('Invalid Password','Fill the Password');
        }

        if (checkpost('com_password')){
            return error('Invalid Comfirm Password','Fill the Comfirm Password');
        }


        if (Request::post('password') !== Request::post('com_password')){
            return error('Invaild','Password is not match');
        }

        $user=User::find(Request::post('id'));

        if (Hash::verify(Request::post('old_password'), $user->password)) {
            $user->password=Hash::make(Request::post('password'));
            $user->save();
            return success('Successful','Update your password');
        }else{
            return error('Error','Old Password is not Match');
        }
    }

    public function jobedit(){
        if (\auth()['role_id']===3){
            $id=Request::get('id');
            $data['job']=JobPost::find($id);
            $data['user']=User::find(\auth()['id']);

            if ( $data['user']->employer->id === null ){
                return error('Job Post Error!','Your account profile is not completed.First Fill requirement.','User/Employer');
            };

            if ($data['user']->employer->id!== $data['job']->employer_id){
                return error('Job Edit Error!','Your account do not have permission.');
            }

            $data['job_functions']=JobFunction::all();
            $data['job_industries']=JobIndustry::all();
            $data['locations']=Location::all();
            $data['contract_types']=ContractType::all();

            return view('job/list/edit',$data);
        }else{
            return error('Error','You do not have permission');
        }
    }

    public function postjobedit(){
        $data=[
            'title'=>Request::post('title'),
            'salary_min'=>Request::post('salary_min'),
            'salary_max'=>Request::post('salary_max'),
            'salary_type'=>Request::post('salary_type'),
            'deathline'=>date('Y-m-d',strtotime(Request::post('deathline'))),
            'responsibilities'=>Request::post('responsibilities'),
            'requirement'=>Request::post('requirement'),
            'experience'=>Request::post('experience'),
            'description'=>Request::post('description'),
            'location_id'=>Request::post('location_id'),
            'contract_type_id'=>Request::post('contract_type_id'),
            'employer_id'=>Request::post('employer_id'),
            'job_function_id'=>Request::post('job_function_id'),
            'job_industry_id'=>Request::post('job_industry_id')
        ];
       $post=JobPost::find(Request::post('job_id'));
       $post->update($data);
       return success('Success','Update Completed');
    }
    public function reject(){
        $id=Request::get('applicant_id');
        $applicant=JobApplicant::find($id);
        $applicant->status='reject';
        $applicant->save();
        return success('Make Interview','Accept to interview');
    }
}