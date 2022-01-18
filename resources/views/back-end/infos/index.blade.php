@extends('back-end.layout.app')

@section('title')
About Us Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		About Us Page
	@endslot
  
@endcomponent
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                      <div class="col-md-8">
                          <h4 class="card-title ">  Control  informations</h4>
                          <p class="card-category"> Here You Can add/edit/delete informations</p>
                      </div>
                     @if($infos->count()) 
                  <div class="col-md-4 text-right">
                      
                         <a href="{{ route('infos.create') }}" class="btn btn-white btn-round" >add info</a>
                        
                      </div>
                      @endif
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
                          Company Name
                        </th>

                       <th>
                          place
                        </th>

                         <th>
                           mobile
                        </th>

                        <th>
                           email
                        </th>
                        <th>
                            description
                        </th>
                       
                      
                        <th class="text-right">
                          control
                        </th>
                      </tr></thead>

                      <tbody>
                      	@foreach($infos as $info)
                             <tr>
                            <td> {{$info->id }}</td>
                            <td> {{$info->company_name }} </td>
                            <td> {{$info->place }} </td>
                            <td> {{$info->mobile }} </td>
                            <td> {{$info->email }} </td>
                            <td> {{$info->description }} </td>
                        
                             
                            <td class="td-actions text-right">
                              
                              <a href="{{ route('infos.edit',['id'=>$info->id]) }}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit info">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="{{ route('infos.destroy',['id'=>$info->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove info">
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                             
                          @endforeach  
                         </tr>
                          
                      </tbody>
                    </table>
                   
                    {{ $infos->links() }}

                  </div>
                </div>
              </div>
            </div>
            
               
              </div>

          

@endsection