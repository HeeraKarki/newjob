<?php
namespace App\Controller\Admin;

use App\Models\Setting\JobIndustry;
use App\Models\User\Employer;
use App\Models\User\EmployerOrder;
use App\Models\User\JobSeeker;
use App\Models\User\User;
use App\Models\Setting\Location;
use App\Models\Setting\JobFunction;
use App\Models\Setting\ContractType;
use Illuminate\Filesystem\Filesystem;

class AdminController
{
    use HelperTrait;
    public function index(){
        $data['users']=User::all();
        $data['employers']=User::where('role_id',3);
        $data['job_seekers']=User::where('role_id',2);
        $data['orders']=EmployerOrder::sum('amount');
        $data['order_details']=EmployerOrder::all();
        $data['user']=User::find(auth()['id']);

        return view('admin/dashboard',$data);
    }

    public function createSeedFile(){
        //Get Locations Data and Make a json File
        $locations=Location::all();
        $this->makeJson('restore','locations.json',$locations->toJson());

        //Get COntract Types Data and Make a json File
        $con_types=ContractType::all();
        $this->makeJson('restore','contract_types.json',$con_types->toJson());


        //Get User Data and Make a json File
        $user=User::all();
        $this->makeJson('restore','users.json',$user);


        //Get Job Function Data and Make a json File
        $jf=JobFunction::all();
        $this->makeJson('restore','job_funs.json',$jf);

        //Get Job Industry Data and Make a json File
        $jd=JobIndustry::all();
        $this->makeJson('restore','job_ind.json',$jd);

        //Get User Data and Make a Json File
        $user=User::all();
        $this->makeJson('restore','users.json',$user);


        //Get User Data and Make a Json File
        $jobseeker=JobSeeker::all();
        $this->makeJson('restore','jobseekers.json',$jobseeker);

        //Get User Data and Make a Json File
        $employer=Employer::all();
        $this->makeJson('restore','employers.json',$employer);


        return success('Create Seeder Json','Successfully Created Seeder Json Files');
    }

    protected function makeconfig(){
        $file= new Filesystem();
        $da=$file->getRequire('config.php');
        $php="<?php return [";
        $php.="'server'=>'{$da['server']}'";
        $php.=",'database'=>[";
        $php.="'host' => {$da['database']['host']},";
        $php.="'db_name' => {$da['database']['db_name']},";
        $php.="'username' => {$da['database']['username']},";
        $php.="'password' => {$da['database']['password']}";
        $php.="]";

        $php.="];";
//        dd($php);
        $fds=$file->put('public/upload/1.php',$php);
//        $fds=$file->append($da);
    }



}
