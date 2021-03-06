<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agence Booking</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

   
</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto " href="#">
                               
                                N-BOOKING
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/hotel')}}">Hotels</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/villa')}}">Villas</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/appartement')}}">Appartments</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">About Us</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">Contact Us</a>
                                  </li>
                                  <li>
                                  @if (Route::has('login'))
                                      <div class="hidden fixed top-20 right-0 px-6 py-4 sm:block mt-3">
                                         @auth
                                            <li >
                                               <x-app-layout >
  
</x-app-layout> 
                                            </li> 
                                              @else
                                             <li><a href="{{ route('login') }}" style="postion: relative;">Log in</a></li>  
                                               @if (Route::has('register'))
                                              <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li> 
                                            @endif
                                          @endauth
                                       </div>
                                    @endif
                                  </li>
                                </ul>
                                
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
            <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                            <input name="city" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
                                        </div>
                                    </div>
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="adult" class="form-control tm-select" id="adult">
                                                <option value="">Adult</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="children" class="form-control tm-select" id="children">
                                                <option value="">Children</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <select name="room" class="form-control tm-select" id="room">
                                                <option value="">Room</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" class="btn btn-primary tm-btn-search">Check Availability</button>
                                        </div>
                                      </div>
                                      <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                          <p class="tm-margin-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                          <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
                                      </div>
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
            
            <div class="tm-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">We are here to help you?</h2>
                            <p class="tm-color-white tm-section-subtitle">chose what you want </p>
                            <a href="#" class="tm-color-white tm-btn-white-bordered mb-2">Contact Us</a>
                        </div>                
                    </div>
                </div>        
            </div>
            
            <div class="tm-section-1 tm-position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
                    <polygon fill="#00d2ff" points="0,0  100,0  50,60"></polygon>                   
                </svg>
                </div> 
                <div class="tm-section-1 tm-position-relative text-center p-5 mt-5">
                    <h3><span>Our</span> Offers</h3>
                    <p><span>What</span> you waiting for? <br> Just Get Your <span>House</span> or <span>Villa</span> or <span>Appartement</span><br> now and <span>Enjoy </span> your vacation</p>
                   <div class="d-flex">
                 
                   <div class="container text-center my-3">
                    
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <img width="900" height="1200" class="d-block col-3 img-fluid" src="/img/hotel2.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/villa.jpeg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/house.jpg">
                                    
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/house3.jfif">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/buil.jpeg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/bich.jpeg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/vac.jpeg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/home.jpeg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-3 img-fluid" src="/img/home1.jpeg">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tm-section-1 tm-position-relative text-center p-5 m-5">
                    <h3><span>Our</span> Services</h3>
                    <p> make your reservation now by one click <br> And live your dream trip. </p>
                </div>
                <div class="container tm-pt-3 tm-pb-2 d-flex ">
                    <div class="row text-center">
                        <article class="col-sm-10 col-md-5 col-lg-4 col-xl-4 tm-article">                            
                            <i class="fas tm-fa-6x fa-hotel tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Hotels Reservation</h3>
                            <p>You are allowed to download, edit and use this template for your business or client websites.</p>
                            <a href="{{url('/hotel')}}" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>
                        </article>
                        <article class="col-sm-10 col-md-5 col-lg-4 col-xl-4 tm-article">                            
                            <i class="fas tm-fa-6x fa-house-user tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Villas Reservation</h3>
                            <p>You are NOT allowed to re-distribute the downloadable template ZIP file on any website.</p>
                            <a href="{{url('/villa')}}" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>                            
                        </article>
                        <article class="col-sm-10 col-md-3 col-lg-4 col-xl-4 tm-article">                           
                            <i class="fas tm-fa-6x fa-house-user tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Houses Reservation</h3>
                            <p>If you see this template being distributed on any other site, that is an illegal copy.</p>
                            <a href="{{url('/appartement')}}" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>                           
                        </article>
                       
                                                  
                       
                    </div>        
                </div>
            <!-- </div> -->
            
            
            <div class="tm-section-1 tm-position-relative text-center p-5 m-5">
                <h3><span>Best</span> Distinations </h3>
                <p> The most beautiful places in asea </p>
            </div>
                <div class="tm-section tm-section-pad tm-bg-img mt-5" id="tm-section-5">                                                        
                    <div class="container ie-h-align-center-fix">
                        <div class="row tm-flex-align-center">
                            <div class="col-xs-12 col-md-12 col-lg-3 col-xl-3 tm-media-title-container">
                                <h2 class="text-uppercase tm-section-title-2">ASIA</h2>
                                <h3 class="tm-color-primary tm-font-semibold tm-section-subtitle-2">Singapore</h3>
                            </div>
                            <div class="col-xs-12 col-md-12 col-lg-9 col-xl-9 mt-0 mt-sm-3">
                                <div class="ml-auto tm-bg-white-shadow tm-pad tm-media-container">
                                    <article class="media tm-margin-b-20 tm-media-1">
                                        <img src="img/img-03.jpg" alt="Image">
                                        <div class="media-body tm-media-body-1 tm-media-body-v-center">
                                            <h3 class="tm-font-semibold tm-color-primary tm-article-title-3">Suspendisse vel est libero sem phasellus ac laoreet</h3>
                                            <p>Vivamus eget tellus ornare, sollicitudin quam id, dictum nulla. Phasellus finibus rhoncus justo, tempus eleifend neque dictum ac. Aenean metus leo, consectetur non. 
                                            <br><br>
											Etiam aliquam arcu at mauris consectetur scelerisque. Integer elementum justo in orci facilisis ultricies. Pellentesque at velit ante. Duis scelerisque metus vel felis porttitor gravida.</p>
                                        </div>                                
                                    </article>
                                    <article class="media tm-margin-b-20 tm-media-1">
                                        <img src="img/img-04.jpg" alt="Image">
                                        <div class="media-body tm-media-body-1 tm-media-body-v-center">
                                            <h3 class="tm-font-semibold tm-article-title-3">Suspendisse vel est libero sem phasellus ac laoreet</h3>
                                            <p>Duis accumsan sagittis tortor in ultrices. Praesent tortor ante, fringilla ac nibh porttitor, fermentum commodo nulla.</p>
                                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>
                                        </div>                                
                                    </article>
                                    <article class="media tm-margin-b-20 tm-media-1">
                                        <img src="img/img-05.jpg" alt="Image">
                                        <div class="media-body tm-media-body-1 tm-media-body-v-center">
                                            <h3 class="tm-font-semibold tm-article-title-3">Faucibus dolor ligula nisl metus auctor aliquet</h3>
                                            <p>Nunc in felis aliquet metus luctus iaculis vel et nisi. Nulla venenatis nisl orci, laoreet ultricies massa tristique id.</p>
                                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>
                                        </div>                                
                                    </article>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            <div class="container">
                <h1 class="text-center">About <Span>Us</Span></h1>
                <p class="text-center"> we are a booking agency located in Tanger<br>
                Email Adresse:trave@N-Booking.com<br>
                Phone Number:05XXXXXXXX<br>
                Adresse:Rue fes residance safa Etage N 5</p>
            </div>
            
            <div class="container">
                <h2 class="text-center font-weight-bold ">Our <span>Partners</span></h2>
                <section class="customer-logos slider">
                    <div class="slide"><img src="/assets/logo1.png" alt="logo"></div>
                    <div class="slide"><img src="/assets/NicePng_hotel-icon-png_8487181.png" alt="logo"></div>
                    <div class="slide"><img src="/assets/NicePng_payroll-icon-png_5188131.png" alt="logo"></div>
                    <div class="slide"><img src="/assets/NicePng_security-guard-png_2354335.png" alt="logo"></div>
                    <div class="slide"><img src="/assets/NicePng_taj-mahal-vector-png_2618963.png" alt="logo"></div>
                    <div class="slide"><img src="/assets/turkish-airlines-logo.jpg" alt="logo"></div>
                    <div class="slide"><img src="/assets/iapan air.jpg" alt="logo"></div>
                    <div class="slide"><img src="/assets/lfly emirate.jpg" alt="logo"></div>
                </section>
            </div>
        
            <p class="copy text-center font-weight-bold">All Rights Reserved &copy; N-Booking</p>
            <div class="tm-section tm-section-pad tm-bg-img tm-position-relative" id="tm-section-6">
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                            <div id="google-map"></div>        
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 mt-3 mt-md-0">
                            <div class="tm-bg-white tm-p-4">
                                <form action="index.html" method="post" class="contact-form">
                                    <div class="form-group">
                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary tm-btn-primary">Send Message Now</button>
                                </form>
                            </div>                            
                        </div>
                    </div>        
                </div>
            </div>
            
            <footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2022</span> N-Booking
                        
                               
                    </div>
                </div>                
            </footer>
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
        <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="slick/slick.min.js"></script>                 <!-- http://kenwheeler.github.io/slick/ -->
       
       <script>

 //Close navbar after clicked

 $('.nav-link').click(function(){
                    $('#mainNav').removeClass('show');
                });
                

$(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover:false,
            responsive: [{
                breakpoint: 768,
                setting: {
                    slidesToShow:4
                }
            }, {
                breakpoint: 520,
                setting: {
                    slidesToShow: 3
                }
            }]
        });
    });

$('#recipeCarousel').carousel({
  interval :2000
})

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 13,
                    center: new google.maps.LatLng(-23.013104,-43.394365),
                    scrollwheel: false
                };

                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
              });

                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
              });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            } 

            function setCarousel() {
                
                if ($('.tm-article-carousel').hasClass('slick-initialized')) {
                    $('.tm-article-carousel').slick('destroy');
                } 

                if($(window).width() < 438){
                    // Slick carousel
                    $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                }
                else {
                 $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });   
                }
            }

            function setPageNav(){
                if($(window).width() > 991) {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 79
                    });   
                }
                else {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 65
                    });   
                }
            }

           
       
            $(document).ready(function(){

                $(window).on("scroll", function() {
                    if($(window).scrollTop() > 100) {
                        $(".tm-top-bar").addClass("active");
                    } else {
                        //remove the background property so it comes transparent again (defined in your css)
                       $(".tm-top-bar").removeClass("active");
                    }
                });      

                // Google Map
                loadGoogleMap();  

                // Date Picker
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');
                
                // Slick carousel
                setCarousel();
                setPageNav();

                $(window).resize(function() {
                  setCarousel();
                  setPageNav();
                });

               
               

                // Control video
                $('.tm-btn-play').click(function() {
                    togglePlayPause();                                      
                });

                $('.tm-btn-pause').click(function() {
                    togglePlayPause();                                      
                });

                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());                           
            });


           

                

        </script>             

</body>
</html>