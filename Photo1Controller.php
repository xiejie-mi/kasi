<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class Photo1Controller extends Controller
{
    public function index()
    {
         $model= new Phone();
        $data = $model->get();
       

        return ['code'=>0,'mag'=>'查询成功','data'=>$data];

        //
    }
}
