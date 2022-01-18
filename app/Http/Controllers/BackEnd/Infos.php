<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Info;
use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\Infos\Store;



class Infos extends BackEndController
{
     public function index()
    {
        $infos=Info::paginate(4);
        return view('back-end.infos.index',compact('infos'));
    }

    public function create()
    {
        return view('back-end.infos.create');
    }


    public function store(Store $request)
    {
        
         $requestArray=$request->all(); 
         Info::create($requestArray);
         return redirect()->route('infos.index');
    }



    public function edit($id)
    {
        $info=Info::findOrFail($id);
        return view('back-end.infos.edit',compact('info'));
    }


    public function update(Store $request, $id)
    {
       $info=Info::findOrFail($id);

         $requestArray=$request->all();         
         $info->update($requestArray);

         return redirect()->route('infos.edit',['id'=>$info->id]);
            
    }
    public function destroy($id){

        $info=Info::findOrFail($id);
        $info->delete();
        return redirect()->route('infos.index');
    }
}
