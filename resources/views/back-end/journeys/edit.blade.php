@extends('back-end.layout.app')

@section('title')
Edit journey Page -_-
@endsection


@section('content')

@component('back-end.layout.header')

	@slot('nav_title')
		Edit journey Page
	@endslot
  
@endcomponent

        <div class="row">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title"> Edit  journey</h4>
                          <p class="card-category">Here You Can Edit journey</p>
                        </div>
                     <div class="card-body">
        <form action="{{route('journeys.update',['id'=>$journey->id])}}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf 


        
        <div class="row">
                                           
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">destination</label>
                           <select name="destination" class="form-control  ">
                         
                          @foreach($destination as $des)
                             <option value="{{$des->name}}" {{  $journey->destination == $des->name ? 'selected' : '' }}>
                              {{$des->name}}
                            </option>
                          @endforeach    
                                
                        </div>
                      </div>

                     <div class="form-group">
                         <textarea name="description" rows="10" class="form-control" placeholder="description">
                         {{ $journey->description }}
                         </textarea>
                  
                    </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">duration</label>
                          <input type="text" class="form-control  " name="duration" value="{{ $journey->duration }}">
                           
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">cost</label>
                          <input type="text" class="form-control  " name="cost" value="{{ $journey->duration }}">
                           
                        </div>
                      </div>
<hr>
                       <div class="col-md-5">
                          <label class="bmd-label-floating">image</label>
                          <input type="file" name="image" class="form-control">
                        
                      </div>

<button type="submit" class="btn btn-primary pull-right">Update  journey</button>
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
                       <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">category</label>
                           <select name="category" class="form-control  ">
                         
                          @foreach($category as $cat)
                             <option value="{{$cat->name}}" {{  $journey->category == $cat->name ? 'selected' : '' }}>
                              {{$cat->name}}
                            </option>
                          @endforeach    
                                
                        </div>
                      </div>

              

                    </div>   
                     </div>
 
                  
                   

                </form>
            </div>
                    
                   

                  
             </div>   
              </div>
          

@endsection