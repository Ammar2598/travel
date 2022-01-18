<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\Messages\Store;
use App\Models\Message;

class Messages extends FrontEndController
{
	public function index(){

    	
        return view('front-end.message.index');
    	
    }

    public function store(Store $request){
      
     Message::create($request->all());
     return redirect()->route('home-page');
    }
}
