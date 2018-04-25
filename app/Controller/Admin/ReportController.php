<?php
/**
 * Created by PhpStorm.
 * User: bkj
 * Date: 4/25/18
 * Time: 8:39 PM
 */

namespace App\Controller\Admin;


use App\Models\User\EmployerOrder;
use Core\Request;

class ReportController
{

    public function annual(){
        $data['datas']=null;
        $data['test']=collect();
        $data['price']=[
          20=>5,
          30=>10,
          50=>20,
          50=>100,
        ];
        if (get_set('date')){
            $data['datas']=EmployerOrder::whereYear('created_at', Request::get('date'))->get();
            $data['totals']=$data['datas']->pluck('amount')->sum();
        }
        return view('admin/report/annual',$data);
    }

    public function monthly(){
        $data['datas']=null;
        $data['test']=collect();
        $data['price']=[
            20=>5,
            30=>10,
            50=>20,
            50=>100,
        ];
        if (get_set('date')){
            $data['datas']=EmployerOrder::whereMonth('created_at', Request::get('date'))->get();
            $data['totals']=$data['datas']->pluck('amount')->sum();
        }
        return view('admin/report/monthly',$data);
    }
}