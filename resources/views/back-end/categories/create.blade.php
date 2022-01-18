@extends('back-end.layout.app')

@section('title')
create category Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		create category Page
	@endslot
  
@endcomponent

				<div class="row">
				            <div class="col-md-8">
				              <div class="card">
				                <div class="card-header card-header-primary">
				                  <h4 class="card-title"> create  category</h4>
				                  <p class="card-category">Here You Can create category</p>
				                </div>
				             <div class="card-body">
		    <form action="{{route('categories.store')}}" method="post">
				 @csrf

				<div class="row">
                                           
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">name</label>
                          <input type="text" class="form-control  " name="name" value="">
                               
                                
                        </div>
                      </div>
                                            <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">meta description</label>
                          <input type="text" class="form-control  " name="meta_des" value="">
                              
                                
                        </div>
                      </div>
                                            <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">meta keywords</label>
                          <input type="text" class="form-control  " name="meta_keywords">
                           
                        </div>
                      </div>
                       
                    </div>   
                     </div>
                    <button type="submit" class="btn btn-primary pull-right">Add  category</button>
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