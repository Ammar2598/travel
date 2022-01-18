@extends('back-end.layout.app')

@section('title')
Users Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		Users Page
	@endslot
  
@endcomponent
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                      <div class="col-md-8">
                          <h4 class="card-title ">  Control  Users</h4>
                          <p class="card-category"> Here You Can add/edit/delete Users</p>
                      </div>
                      
                  <div class="col-md-4 text-right">
                        @if(auth()->user()->group == "admin")
                         <a href="{{ route('users.create') }}" class="btn btn-white btn-round" >add User</a>
                        @else
                         <a href="{{ route('users.create') }}" class="btn btn-white btn-round" style="pointer-events: none; display: inline-block;">add User</a>
                         @endif
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
                          group
                        </th>
                        <th class="text-right">
                          control
                        </th>
                      </tr></thead>

                      <tbody>
                      	@foreach($users as $user)
                             <tr>
                            <td> {{$user->id }}</td>
                            <td> {{$user->name }} </td>
                            <td> {{$user->email }} </td>
                            <td> {{$user->group }}</td>
                              @if(auth()->user()->group == "admin")
                            <td class="td-actions text-right">
                              
                              <a href="{{ route('users.edit',['id'=>$user->id]) }}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit User">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="{{ route('users.destroy',['id'=>$user->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove User">
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                             @else
                             <td class="td-actions text-right">
                              
                              <a href="#" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit User" style="pointer-events: none; display: inline-block;">
                                <i class="material-icons">edit</i>
                                <br>
                              </a>  
                             <form action="#" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove User" disabled>
                                   <i class="material-icons">close</i>
                                 </button>
                              </form>  

                            </td>
                            @endif
                          @endforeach  
                         </tr>
                          
                      </tbody>
                    </table>
{{ $users->links() }}
                  </div>
                </div>
              </div>
            </div>
            
               
              </div>

          

@endsection