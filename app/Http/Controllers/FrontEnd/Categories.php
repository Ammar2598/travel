<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Journey;

class Categories extends FrontEndController
{
    public function index($id){

    	$cat=Category::findOrFail($id);
        $journeys=Journey::where('category',$cat->name)->paginate(5);
        return view('front-end.category.index',compact('journeys','cat'));
    	
    }
}
