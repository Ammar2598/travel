@extends('welcome')
@section('content')
 <!-- Hero Area Slider -->
    <section id="popular-trips" class="popular-trips style2 section" style="border-bottom: 1px solid #ddd;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-line center">
                        <h2>Availabe Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="trips-main">
                        <!-- Trips Slider -->
                        <div class="trips-slider">
                            @foreach($res_blogs as $blog)
                                                            <!-- Single Slider -->
                                                      <div class="single-slider">
                                                        <div class="card">
                                                          <div class="card-header">
                                                            {{ $blog->title }}
                                                          </div>
                                                          <div class="card-body">
                                                            <h5 class="card-title">Bosted By : {{ $blog->user_name }}</h5>
                                                            <p class="card-text">{{$blog->content}}</p>
                                                            <br>
                                                            
                                                          </div>
                                                        </div>
                                                    </div>

                             @endforeach

                                                        <!--/ End Single Trips -->
                        </div>
                        <!--/ End Trips Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection