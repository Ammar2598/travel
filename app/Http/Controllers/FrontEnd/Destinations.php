<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\Journey;
use App\Models\Destination;

class Destinations extends FrontEndController
{
	public function index($id){

    	$des=Destination::findOrFail($id);
        $journeys=Journey::where('destination',$des->name)->paginate(5);
        return view('front-end.destination.index',compact('journeys','des'));
    	
    }
    
}
