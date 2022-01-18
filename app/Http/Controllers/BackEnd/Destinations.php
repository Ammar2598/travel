<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\Destinations\Store;


class Destinations extends BackEndController
{
     public function index()
    {
        $destinations=Destination::paginate(5);
        return view('back-end.destinations.index',compact('destinations'));
    }

    public function create()
    {
        return view('back-end.destinations.create');
    }


    public function store(Store $request)
    {
        
         $requestArray=$request->all(); 
         Destination::create($requestArray);
         return redirect()->route('destinations.index');
    }



    public function edit($id)
    {
        $destination=Destination::findOrFail($id);
        return view('back-end.destinations.edit',compact('destination'));
    }


    public function update(Store $request, $id)
    {
       $destination=Destination::findOrFail($id);

         $requestArray=$request->all();         
           
         $destination->update($requestArray);

         return redirect()->route('destinations.edit',['id'=>$destination->id]);
            
    }
    public function destroy($id){

        $destination=Destination::findOrFail($id);
        $destination->delete();
        return redirect()->route('destinations.index');
    }
}
