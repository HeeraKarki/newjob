<?php
namespace App\Controller\Admin;

use App\Models\Setting\ContractType;
use App\Models\Setting\Location;
use Illuminate\Filesystem\Filesystem;

class AdminController
{
    use HelperTrait;
    public function index(){
        return view('admin/dashboard');
    }

    public function createSeedFile(){
        //Get Locations Data and Make a json File
        $locations=Location::all();
        $this->makeJson('restore','locations.json',$locations->toJson());

        //Get COntract Types Data and Make a json File
        $con_types=ContractType::all();
        $this->makeJson('restore','contract_types.json',$con_types->toJson());

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
