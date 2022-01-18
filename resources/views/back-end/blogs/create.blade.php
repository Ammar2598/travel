@extends('back-end.layout.app')

@section('title')
create blog Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		create blog Page
	@endslot
  
@endcomponent

				<div class="row">
				            <div class="col-md-8">
				              <div class="card">
				                <div class="card-header card-header-primary" >
				                  <h4 class="card-title"> create  blog</h4>
				                  <p class="card-category">Here You Can create blog</p>
				                </div>
				             <div class="card-body">
		    <form action="{{route('blogs.store')}}" method="post" >
				 @csrf

				<div class="row">
                                           
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">title</label>
                          <input type="text" class="form-control  " name="title" value="">
                               
                                
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">content</label>
                           <textarea name="content" rows="10" class="form-control"> </textarea>    
                                
                        </div>
                      </div>
                     
                       
                    </div>   
                     </div>
                    <button type="submit" class="btn btn-primary pull-right">Add  blog</button>
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