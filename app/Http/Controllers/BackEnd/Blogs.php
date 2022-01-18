<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\Blogs\Store;
use App\Http\Requests\BackEnd\Blogs\Update;

class Blogs extends BackEndController
{
     public function index()
    {
        $blogs=Blog::paginate(4);
        return view('back-end.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('back-end.blogs.create');
    }


    public function store(Store $request)
    {
        
         $requestArray=$request->all(); 
         $requestArray['user_name']=auth()->user()->name;
         Blog::create($requestArray);
         return redirect()->route('blogs.index');
    }



    public function edit($id)
    {
        $blog=Blog::findOrFail($id);
        return view('back-end.blogs.edit',compact('blog'));
    }


    public function update(Update $request, $id)
    {
       $blog=Blog::findOrFail($id);

         $requestArray=$request->all();         
         $requestArray['user_name']=auth()->user()->name;
         $blog->update($requestArray);

         return redirect()->route('blogs.edit',['id'=>$blog->id]);
            
    }
    public function destroy($id){

        $blog=Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
