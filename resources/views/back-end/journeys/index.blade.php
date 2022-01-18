@extends('back-end.layout.app')

@section('title')
journeys Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		journeys Page
	@endslot
  
@endcomponent
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                      <div class="col-md-8">
                          <h4 class="card-title ">  Control  journeys</h4>
                          <p class="card-category"> Here You Can add/edit/delete journeys</p>
                      </div>
                      
                  <div class="col-md-4 text-right">
                      
                         <a href="{{ route('journeys.create') }}" class="btn btn-white btn-round" >add journeys</a>
                        
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
                          destination
                        </th>
                        <th>
                          description
                        </th>
                        <th>
                          cost
                        </th>
                        <th>
                          category
                        </th>
                        <th>
                          duration
                        </th>
                       <th>
                          image
                        </th>

                        <th class="text-right">
                          control
                        </th>
                      </tr></thead>

                      <tbody>
                      	@foreach($journeys as $journey)
                             <tr>
                            <td> {{$journey->id }}</td>
                            <td> {{$journey->destination }} </td>
                            <td> {{$journey->description }} </td>
                            <td> {{$journey->cost }} </td>
                            <td> {{$journey->category }} </td>
                            <td> {{$journey->duration }} </td>

                          <td>
                             <img src="{{ asset($journey->image) }}" style=" width:50px " alt="No Image Available" >
                         </td>


                            <td class="td-actions text-right" class="card-img-top" style="">
                              
                              <a href="{{ route('journeys.edit',['id'=>$journey->id]) }}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit journey">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="{{ route('journeys.destroy',['id'=>$journey->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove journey">
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                             
                          @endforeach  
                         </tr>
                          
                      </tbody>
                    </table>

                    {{ $journeys->links() }}

                  </div>
                </div>
              </div>
            </div>
            
               
              </div>

          

@endsection