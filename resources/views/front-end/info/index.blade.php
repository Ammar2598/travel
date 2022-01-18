@extends('welcome')
@section('content')
 <!-- Hero Area Slider -->
    <section id="popular-trips" class="popular-trips style2 section" style="border-bottom: 1px solid #ddd;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-line center">
                        <h2>More About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="trips-main">
                        <!-- Trips Slider -->
                        
                            
                                                            <!-- Single Slider -->
                                                      <center>
                                                        <div class="card">
                                                          <div class="card-header">
                                                            company name : {{ $info->company_name }}
                                                          </div>

                                                          <div class="card-body">
                                                            <p class="card-text">company place : {{ $info->place }}</p>
                                                            
                                                            <p class="card-text">company mobile : {{ $info->mobile }}</p>
                                                            <p class="card-text">company email : {{ $info->email }}</p>
                                                            <h5>what we offer </h5>
                                                            <p class="card-text"> {{ $info->description }}</p>
                                                            <br>
                                                            
                                                          </div>
                                                        </div>
                                                    </center>

                            

                                                        <!--/ End Single Trips -->
                        
                        <!--/ End Trips Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection