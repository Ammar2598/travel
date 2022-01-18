<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\Journey;

class Journeys extends FrontEndController
{
     public function index($id){

    	$res_journey=Journey::findOrFail($id);
        $res_journeys=Journey::where('cost',$res_journey->cost)->paginate(5);
        return view('front-end.journey.index',compact('res_journeys','res_journey'));
    	
    }

    public function search(){

      $journey=Journey::orderBy('id','desc');
        if (request()->has('search') && request()->get('search')!='') {
          $journey=$journey->where('destination','like',"%".request()->get('search')."%");
        }
        $journeys=$journey->paginate(30);
        return view('front-end.journey-search.index',compact('journeys'));

    }
}
