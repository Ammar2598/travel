@extends('back-end.layout.app')

@section('title')
destinations Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		destinations Page
	@endslot
  
@endcomponent
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                      <div class="col-md-8">
                          <h4 class="card-title ">  Control  destinations</h4>
                          <p class="card-category"> Here You Can add/edit/delete destinations</p>
                      </div>
                      
                  <div class="col-md-4 text-right">
                      
                         <a href="{{ route('destinations.create') }}" class="btn btn-white btn-round" >add destination</a>
                        
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
                          Name
                        </th>
                      
                        <th class="text-right">
                          control
                        </th>
                      </tr></thead>

                      <tbody>
                      	@foreach($destinations as $destination)
                             <tr>
                            <td> {{$destination->id }}</td>
                            <td> {{$destination->name }} </td>
                           
                            
                             
                            <td class="td-actions text-right">
                              
                              <a href="{{ route('destinations.edit',['id'=>$destination->id]) }}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit destination">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="{{ route('destinations.destroy',['id'=>$destination->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove destination">
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                             
                          @endforeach  
                         </tr>
                          
                      </tbody>
                    </table>
                   
                    {{ $destinations->links() }}

                  </div>
                </div>
              </div>
            </div>
            
               
              </div>

          

@endsection