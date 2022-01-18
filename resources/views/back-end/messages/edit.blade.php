@extends('back-end.layout.app')

@section('title')
Edit message Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		Edit message Page
	@endslot
  
@endcomponent

        <div class="row">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title"> Edit  message</h4>
                          <p class="card-category">Here You Can Edit message</p>
                        </div>
                     <div class="card-body">
       
        <div class="row">
                                           
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">name</label>
                          <input type="text" class="form-control  " name="name" value="{{ $message->name }}">
                               
                                
                        </div>
                      </div>
                                            <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">email</label>
                          <input type="text" class="form-control  " name="email" value="{{ $message->email }}">
                              
                                
                        </div>
                      </div>
                                            <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">message</label>
                         <textarea class="form-control  @error('message') is-invalid @enderror" name="message" required rows="4" 
                         placeholder="Tell us your thoughts and feelings...">{{ $message->message }}</textarea>
                           
                        </div>
                      </div>
                       
                    </div>   
                     </div>
                    
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                
            </div>
                    
                   

                  
             </div>   
              </div>
          

@endsection