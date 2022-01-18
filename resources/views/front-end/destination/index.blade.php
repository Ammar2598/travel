@extends('welcome')
@section('content')
 <!-- Hero Area Slider -->
    <section id="popular-trips" class="popular-trips style2 section" style="border-bottom: 1px solid #ddd;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-line center">
                        <h2>Availabe Trips for {{ $des->name }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="trips-main">
                        <!-- Trips Slider -->
                        <div class="trips-slider">
                            @foreach($journeys as $journey)
                                                            <!-- Single Slider -->
                                                      <div class="single-slider">
                                    <div class="trip-head">
                                        <img src="{{asset('/')}}/{{$journey->image}}" alt="#">
                                    </div>
                                    <div class="trip-details">
                                        <div class="left">
                                            <h4>
                                                <a href="http://gazellecrossover.com/en/trip/9">
                                                    {{$journey->description}}
                                                </a>
                                            </h4>
                                            <p><i class="fa fa-clock-o"></i>for : {{$journey->duration}}</p>
                                        </div>
                                        <div class="right">
                                            <p>From<span>{{$journey->cost}}</span></p>
                                        </div>
                                       <i class="fa fa-anchor" aria-hidden="true">Destinations : {{$journey->destination}}</i> 
                                    </div>
                                    <div>
                                      <i class="fa fa-bell-o" aria-hidden="true">duration : {{$journey->duration}}</i> 
                                        
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