<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\Catrgories\Store;





class Categories extends BackEndController
{
    public function index()
    {
        $categories=Category::paginate(5);
        return view('back-end.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('back-end.categories.create');
    }


    public function store(Store $request)
    {


         $requestArray=$request->all();
        
         Category::create($requestArray);
         return redirect()->route('categories.index');
    }



    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('back-end.categories.edit',compact('category'));
    }


    public function update(Store $request, $id)
    {
       $category=Category::findOrFail($id);

         $requestArray=$request->all();         
           
         $category->update($requestArray);

         return redirect()->route('categories.edit',['id'=>$category->id]);
            
    }
    public function destroy($id){

        $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
