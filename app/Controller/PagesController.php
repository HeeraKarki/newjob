<?php
namespace App\Controller;

use App\Models\Todo;
use App\Models\User;
use Core\Helper\Auth;
use Core\Helper\Mail;
use Core\Helper\Session;
use Core\Helper\View;
use Core\Request;

class PagesController
{
    public function __construct()
    {
//        Auth::check();
    }

    public function home(){
        $mail= new Mail();
        $mail::send([
            'to'=>'heerakarki99@gmail.com',
            'subject'=>'Form Custom',
            'body'=>"<h1 style='width: 100%;height: 20px; background-color: chartreuse'>This is Good</h1>",
            'sender'=>'admin'
        ]);

//        Mail::send();

        $data['tasks']=Todo::all();
        $data['title']='Jar Gyi Contorller';
        return View::make('index',$data);
//        return view('index',$data);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        view('contact');
    }

    public function post(){
        Todo::create([
//            'description'=>$_POST['name'],
            'description'=>Request::post('name'),
            'completed'=>false
        ]);

        redirect();
    }

}