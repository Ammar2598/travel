@extends('back-end.layout.app')

@section('title')
blogs Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		blogs Page
	@endslot
  
@endcomponent
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                      <div class="col-md-8">
                          <h4 class="card-title ">  Control  blogs</h4>
                          <p class="card-category"> Here You Can add/edit/delete blogs</p>
                      </div>
                      
                  <div class="col-md-4 text-right">
                      
                         <a href="{{ route('blogs.create') }}" class="btn btn-white btn-round" >add blog</a>
                        
                      </div>
                    </div>
                 
                </div>
                <div class="card-body">

                 <div class="table-responsive">
                    <table class="table" enctype="multipart/form-data">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          tilte
                        </th>

                       <th>
                          content
                        </th>

                         <th>
                           Name
                        </th>
                      
                        <th class="text-right">
                          control
                        </th>
                      </tr></thead>

                      <tbody>
                      	@foreach($blogs as $blog)
                             <tr>
                            <td> {{$blog->id }}</td>
                            <td> {{$blog->title }} </td>
                            <td> {{$blog->content }} </td>
                            <td> {{ ucfirst($blog->user_name) }} </td>
                           
                            
                             
                            <td class="td-actions text-right">
                              
                              <a href="{{ route('blogs.edit',['id'=>$blog->id]) }}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit blog">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="{{ route('blogs.destroy',['id'=>$blog->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove blog">
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                             
                          @endforeach  
                         </tr>
                          
                      </tbody>
                    </table>
                   
                    {{ $blogs->links() }}

                  </div>
                </div>
              </div>
            </div>
            
               
              </div>

          

@endsection