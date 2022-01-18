@extends('back-end.layout.app')

@section('title')
categories Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		categories Page
	@endslot
  
@endcomponent
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                      <div class="col-md-8">
                          <h4 class="card-title ">  Control  categories</h4>
                          <p class="card-category"> Here You Can add/edit/delete categories</p>
                      </div>
                      
                  <div class="col-md-4 text-right">
                      
                         <a href="{{ route('categories.create') }}" class="btn btn-white btn-round" >add category</a>
                        
                      </div>
                    </div>
                 
                </div>
                <div class="card-body">

                 <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        
                        <th class="text-right">
                          control
                        </th>
                      </tr></thead>

                      <tbody>
                      	@foreach($categories as $category)
                             <tr>
                            <td> {{$category->id }}</td>
                            <td> {{$category->name }} </td>
                            
                             
                            <td class="td-actions text-right">
                              
                              <a href="{{ route('categories.edit',['id'=>$category->id]) }}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit category">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="{{ route('categories.destroy',['id'=>$category->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove category">
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                             
                          @endforeach  
                         </tr>
                          
                      </tbody>
                    </table>
                    {{ $categories->links() }}

                  </div>
                </div>
              </div>
            </div>
            
               
              </div>

          

@endsection