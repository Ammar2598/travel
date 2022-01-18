<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\Info;

class Informations extends FrontEndController
{
     public function index(){

    	
        $info=Info::get()->first();
       
        return view('front-end.info.index',compact('info'));
    	
    }
}
