
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Ammar &minus; Travel Agency </title>
    <!-- Favicon -->
    <link rel="icon" type="{{asset('/')}}/design/image/png" href="{{asset('/')}}/design/images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    
    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{asset('/')}}/design/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/datepicker.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/owl-carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/slicknav.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/animate.css">
    
    <!-- TravelTrek StyleSheet -->
    <link rel="stylesheet" href="{{asset('/')}}/design/css/reset.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/style.css">
    <link rel="stylesheet" href="{{asset('/')}}/design/css/responsive.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="js">
    
 <!-- Preloader -->
<div class="cp-preloader">
    <div class="cp-preloader__box">
        <div class="cp-preloader-inner">
            <div class="icon">
                <i class="fa fa-car"></i>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Header Area -->


<header id="site-header" class="site-header style2">
    <nav class="navbar navbar-expand-lg fixed-top bg-danger " >
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('home-page')}}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
        Travel
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">

         
          <li class="nav-item">
                <div class="btn-group">
                  <a  class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Categories
                  </a>
                  <div class="dropdown-menu">
                    @foreach($categories as $category)
                    <a class="dropdown-item" href="{{ route('front.category',['id'=>$category->id]) }}">{{$category->name}}</a>
                    @endforeach
                    
                  </div>
                </div>
          </li>


  &nbsp&nbsp&nbsp
          <li class="nav-item">
                <div class="btn-group">
                  <a  class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Destinations
                  </a>
                  <div class="dropdown-menu">
                    @foreach($destinations as $destination)
                    <a class="dropdown-item" href="{{ route('front.destination',['id'=>$destination->id]) }}">{{$destination->name}}</a>
                    @endforeach
                  </div>
                </div>
          </li>
          &nbsp&nbsp&nbsp
    
    <li class="nav-item">
                <div class="btn-group">
                  <a  class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    budget
                  </a>
                  <div class="dropdown-menu">
                    @foreach($journeys as $journey)
                    <a class="dropdown-item" href="{{ route('front.journey',['id'=>$journey->id]) }}">{{$journey->cost}}</a>
                    @endforeach
                  </div>
                </div>
          </li>

  &nbsp&nbsp&nbsp

          <li class="nav-item">
                <div class="btn-group">
                  <a  class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blogs
                  </a>
                  <div class="dropdown-menu">
                    @foreach($blogs as $blog)
                    <a class="dropdown-item" href="{{ route('front.blog',['id'=>$blog->id]) }}">{{$blog->title}}</a>
                    @endforeach
                  </div>
                </div>
          </li>
  &nbsp&nbsp&nbsp
<li class="nav-item">
                <div class="btn-group">
                  <a  class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  About Us
                  </a>
                  <div class="dropdown-menu">
                   
                    <a class="dropdown-item" href="{{ route('front.info') }}">About Company</a>
                  
                  </div>
                </div>
          </li>
          &nbsp&nbsp&nbsp
       <form class="form-inline" style="margin-top:15px" action="{{route('journey.search')}}">
          <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
          
       </form>
      </li> 
        </ul>
      </div>
    </div>
  </nav>
</header>
<!--/ End Header Area -->

<div>
@yield('content')
</div>



 <!-- Footer -->
<footer class="footer style2">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget about">
                        <h5>Info About company</h5>
                        <br>
                   <p> {{ $infos->description }}</p>    
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget">
                        <h2>Categories</h2>
                        <ul>
                         @foreach($categories as $category)
                            <li><a href="{{ route('front.category',['id'=>$category->id]) }}">{{$category->name}}</a></li>
                          @endforeach
                       </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget blog">
                        <h2>Latest Trips</h2>
                        <ul>
                            @foreach($journeys as $journey)
                               <li><a href="{{ route('front.journey',['id'=>$journey->id]) }}">{{$journey->description}}</a></li>
                               
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget blog">
                        <h2>Latest Blog</h2>
                        <ul>
                             @foreach($blogs as $blog)          
                              <li><a href="{{ route('front.blog',['id'=>$blog->id]) }}">{{$blog->title}}</a></li>
                              @endforeach
                        </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
            </div>
            
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-inner">
                        <div class="row">
                            <div class="col-12">
                                <!-- Copyright -->
                                <div class="copyright">
                                    <p>Copyright &#9400; 2019 by <a href="#">Ammar.</a> All Right Reserved</p>
                                </div>
                                <!--/ End Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
    <!--/ End footer -->
    <!-- Jquery -->
    <script src="{{asset('/')}}/design/js/jquery.min.js"></script>
    <script src="{{asset('/')}}/design/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{asset('/')}}/design/js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="{{asset('/')}}/design/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('/')}}/design/js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="{{asset('/')}}/design/js/bootstrap-datepicker.js"></script>
    <!-- Steller JS -->
    <script src="{{asset('/')}}/design/js/steller.js"></script>
    <!-- Fancybox JS -->
    <script src="{{asset('/')}}/design/js/facnybox.min.js"></script>
    <!-- Circle Progress JS -->
    <script src="{{asset('/')}}/design/js/circle-progress.min.js"></script>
    <!-- Slicknav JS -->
    <script src="{{asset('/')}}/design/js/slicknav.min.js"></script>
    <!-- Niceselect JS -->
    <script src="{{asset('/')}}/design/js/niceselect.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('/')}}/design/js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('/')}}/design/js/magnific-popup.js"></script>
    <!-- Waypoints JS -->
    <script src="{{asset('/')}}/design/js/waypoints.min.js"></script>
    <!-- Wow Min JS -->
    <script src="{{asset('/')}}/design/js/wow.min.js"></script>
    <!-- Jquery Counterup JS -->
    <script src="{{asset('/')}}/design/js/jquery-counterup.min.js"></script>
    <!-- Ytplayer JS -->
    <script src="{{asset('/')}}/design/js/ytplayer.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="{{asset('/')}}/design/js/scrollup.js"></script>
    <!-- Easing JS -->
    <script src="{{asset('/')}}/design/js/easing.js"></script>
    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script> 
    <script src="{{asset('/')}}/design/js/gmap.min.js"></script>
    <!-- Active JS -->
    <script src="{{asset('/')}}/design/js/active.js"></script>
</body>
</html>