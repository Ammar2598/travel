@extends('welcome')
@section('content')
 <!-- Hero Area Slider -->
    <section id="hero-area" class="hero-area overlay style2">
        <!-- Slider Area -->
        <div class="slider-active">
            
                <div class="single-slider overlay" style='background-image:url("{{asset('/')}}/home.jpg")'>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-inner">
                                    <!-- Welcome Text -->
                                    
                                    <!--/ End Welcome Text -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="single-slider overlay" style='background-image:url("{{asset('/')}}/design/images/view.jpg")'>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-inner">
                                    <!-- Welcome Text -->
                                    
                                    <!--/ End Welcome Text -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="single-slider overlay" style='background-image:url("{{asset('/')}}/bruno-abatti.jpg")'>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-inner">
                                    <!-- Welcome Text -->
                                    
                                    <!--/ End Welcome Text -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="single-slider overlay" style='background-image:url("{{asset('/')}}/ilya-yakover.jpg")'>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-inner">
                                    <!-- Welcome Text -->
                                    
                                    <!--/ End Welcome Text -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
        <!--/ End Slider Area -->
        
    </section>
    <!--/ End Hero Area Slider -->

    <!-- Why Choose -->
    <section id="why-choose" class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-line center">
                        <h2>What we offer</h2>
                        <p>Why Choose Us</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Why Choose -->

    <!-- Call To Action -->
    <section id="cta" class="cta style2 section overlay"  data-stellar-background-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- CTA Text -->
                    <div class="cta-text">
                        <div class="title-line">
                            <p>Ammar copmany For Travel.</p>
                        </div>
                        <p>  {{ $infos->description }} </p>
                        <a href="{{ route('contect.recieve') }}" class="btn">Contact Us</a>
                    </div>
                    <!-- End CTA Text -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->

    <!-- Popular Trips -->
    <section id="popular-trips" class="popular-trips style2 section" style="border-bottom: 1px solid #ddd;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-line center">
                        <h2>Popular Trips</h2>
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
                                            <p>Cost   <span>{{$journey->cost}}</span></p>
                                        </div>
                                        <a href="{{ route('front.journey',['id'=>$journey->id]) }}" class="btn">View More</a>
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
    <!--/ End Popular Trips -->


@endsection