@extends('back-end.layout.app')

@section('title')
create information Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		create information Page
	@endslot
  
@endcomponent

				<div class="row">
				            <div class="col-md-8">
				              <div class="card">
				                <div class="card-header card-header-primary" >
				                  <h4 class="card-title"> create  information</h4>
				                  <p class="card-category">Here You Can create information</p>
				                </div>
				             <div class="card-body">
		    <form action="{{route('infos.store')}}" method="post" >
				 @csrf

				<div class="row">
                                           
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">company name</label>
                          <input type="text" class="form-control  " name="company_name" value="">
                                
                        </div>
                      </div>

                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">place</label>
                           <textarea name="place" rows="10" class="form-control"> </textarea>    
                                
                        </div>
                      </div>
                     
                     <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">mobile</label>
                          <input type="text" class="form-control  " name="mobile" value="">
                                
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">email</label>
                          <input type="text" class="form-control  " name="email" value="">
                                
                        </div>
                      </div>

                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">description</label>
                           <textarea name="description" rows="10" class="form-control"> </textarea>    
                                
                        </div>
                      </div>

                       
                    </div>   
                     </div>
                    <button type="submit" class="btn btn-primary pull-right">Add  information</button>
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