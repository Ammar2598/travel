<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Journey;

class Blogs extends FrontEndController
{
     public function index($id){

    	$res_blog=Blog::findOrFail($id);
        $res_blogs=Blog::where('title',$res_blog->title)->paginate(5);
        return view('front-end.blog.index',compact('res_blogs','res_blog'));
    	
    }
}
