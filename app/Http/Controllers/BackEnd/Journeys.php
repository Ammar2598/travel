<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Journey;
use App\Models\Destination;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\Journeys\Store;

use DB;
use Storage;

class Journeys extends BackEndController
{
     public function index()
    {
        $journeys=Journey::orderBy('id','asc')->paginate(5);

        return view('back-end.journeys.index',compact('journeys'));
    }

    public function create()
    {
        
        $destination = DB::table('destinations')->get();
        $category = DB::table('categories')->get();
    	
       
        return view('back-end.journeys.create',compact('destination','category'));
    }


    public function store(Store $request)
    {
   
         $requestArray=$request->all();  
        if ($request->file('image')) {
             $path=Storage::putFile('public', $request->file('image'));
             $url=Storage::url($path);
             $requestArray['image']=$url;
        }
         
         Journey::create($requestArray);
         return redirect()->route('journeys.index');
    }



    public function edit($id)
    {
        $journey=Journey::findOrFail($id);
        $destination = DB::table('destinations')->get();
        $category = DB::table('categories')->get();
        
        return view('back-end.journeys.edit',compact('journey','destination','category'));
    }


    public function update(Store $request, $id)
    {
       $journey=Journey::findOrFail($id);

         $requestArray=$request->all();

               if ($request->hasFile('image')){ 
             $path=Storage::putFile('public', $request->file('image'));
             $url=Storage::url($path);
             $requestArray['image']=$url;
        }

         $journey->update($requestArray);

         return redirect()->route('journeys.edit',['id'=>$journey->id]);
            
    }
    public function destroy($id){

        $journey=Journey::findOrFail($id);
        $journey->delete();
        return redirect()->route('journeys.index');
    }
}
