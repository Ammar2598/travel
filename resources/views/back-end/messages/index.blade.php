@extends('back-end.layout.app')

@section('title')
message Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		message Page
	@endslot
  
@endcomponent
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                      <div class="col-md-8">
                          <h4 class="card-title ">  Control  message</h4>
                          <p class="card-category"> Here You Can edit/delete message</p>
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
                        <th>
                          email
                        </th>
                        <th>
                          message
                        </th>
                        
                        <th class="text-right">
                          control
                        </th>
                      </tr></thead>

                      <tbody>
                      	@foreach($messages as $message)
                             <tr>
                            <td> {{$message->id }}</td>
                            <td> {{$message->name }} </td>
                            <td> {{$message->email }} </td>
                            <td> {{$message->message }} </td>
                            
                             
                            <td class="td-actions text-right">
                              
                              <a href="{{ route('messages.edit',['id'=>$message->id]) }}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit message">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="{{ route('messages.destroy',['id'=>$message->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove message">
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                             
                          @endforeach  
                         </tr>
                          
                      </tbody>
                    </table>
                    {{ $messages->links() }}

                  </div>
                </div>
              </div>
            </div>
            
               
              </div>

          

@endsection