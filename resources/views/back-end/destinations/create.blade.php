@extends('back-end.layout.app')

@section('title')
create destination Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		create destination Page
	@endslot
  
@endcomponent

				<div class="row">
				            <div class="col-md-8">
				              <div class="card">
				                <div class="card-header card-header-primary" >
				                  <h4 class="card-title"> create  destination</h4>
				                  <p class="card-category">Here You Can create destination</p>
				                </div>
				             <div class="card-body">
		    <form action="{{route('destinations.store')}}" method="post" enctype="multipart/form-data">
				 @csrf

				<div class="row">
                                           
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">name</label>
                          <input type="text" class="form-control  " name="name" value="">
                               
                                
                        </div>
                      </div>

                     
                       
                    </div>   
                     </div>
                    <button type="submit" class="btn btn-primary pull-right">Add  destination</button>
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