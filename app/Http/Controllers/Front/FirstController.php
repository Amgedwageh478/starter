<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FirstController extends BaseController
{
    /*public function getindex(){
        return view('welcome');
    }*/
    public function getindex(){
        /*$obj = new \stdClass();
        $obj->name ='amged';
        $obj->id ='27';
        $obj->gender ='28';*/
        ////string///////////////////////////////////////////
        //return view('welcome')->with('name','amged');
        //array//////////////////////////////////////////////
        $data = ['ahmed','bassem'];
        return view('welcome',compact('data'));
    }
}
