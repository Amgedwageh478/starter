<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SecondController extends BaseController
{
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    public function showstring(){
        return "sssssssssssssssss";
    }
    public function showstring1(){
        return "sssssssssssssssss";
    }
    public function showstring2(){
        return "sssssssssssssssss";
    }
    public function showstring3(){
        return "sssssssssssssssss";
    }
}
