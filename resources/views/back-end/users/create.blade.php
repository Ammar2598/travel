@extends('back-end.layout.app')

@section('title')
create user Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		create user Page
	@endslot
  
@endcomponent

				<div class="row">
				            <div class="col-md-8">
				              <div class="card">
				                <div class="card-header card-header-primary">
				                  <h4 class="card-title"> create  User</h4>
				                  <p class="card-category">Here You Can create User</p>
				                </div>
				             <div class="card-body">
		    <form action="{{route('users.store')}}" method="post">
				 @csrf

				<div class="row">
                                           
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control  " name="name" value="">
                               
                                
                        </div>
                      </div>
                                            <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control  " name="email" value="">
                              
                                
                        </div>
                      </div>
                                            <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control  " name="password">
                           
                        </div>
                      </div>
                                            <div class="col-md-5">
                        <div class="form-group bmd-form-group is-filled">
                          <label class="bmd-label-floating">users Groupe </label>
                           <select name="group" class="form-control  ">
                             <option value="admin">admin</option>
                             <option value="user">user</option>

                           </select>
                                
                        </div>
                      </div>
                    </div>   
                     </div>
                    <button type="submit" class="btn btn-primary pull-right">Add  User</button>
                    <div class="clearfix"></div>        
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                </form>
            </div>
                    
                   

                  
             </div>   
              </div>
          

@endsection