<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Health Lab - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}"type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('dist/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/pogo-slider.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
  <div class="loader">
   <img src="images/preloader.gif" alt="" />
  </div>
    </div>end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('dist/images/logo2.png') }}"
                        alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
                        <li><a class="nav-link" href="#appointment">Appointment</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li><a class="nav-link" href="#team">Doctor</a></li>
                        <li><a class="nav-link" href="#address">Address</a></li>
                        <li class="none-style"></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a class="nav-link" href="{{ url('/admin') }}">{{Auth::user()->name}}</a></li>
                            @else
							<li><a class="nav-link" href="{{route('login')}}">Inicio de Sesion</a></li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500"
                        style="background-image:url(dist/images/slider-01.jpg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Welcome to Health Lab</h1>
                                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
                                <a href="#" class="btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500"
                        style="background-image:url(dist/images/slider-02.jpg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>We are Expert in The Field of Health Lab</h1>
                                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum</p>
                                <a href="#appointment" class="btn">Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500"
                        style="background-image:url(dist/images/slider-03.jpg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Welcome to Health Lab</h1>
                                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
                                <a href="#" class="btn">Contact Us</a>
                            </div>
                        </div>

                    </div>
                </div><!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About us -->
    <div id="about" class="about-box">
        <div class="about-a1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2> Welcome to Health Lab </h2>
                                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet
                                    auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a,
                                    consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum
                                    tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna.
                                </p>
                                <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet
                                    auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a,
                                    consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum
                                    tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about-m">
                                    <ul id="banner">
                                        <li>
                                            <img src="{{ asset('dist/images/about-img-01.jpg') }}" alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('dist/images/about-img-02.jpg') }}" alt="">
                                        </li>
                                        <li>
                                            <img src="{{ asset('dist/images/about-img-03.jpg') }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About us -->

    <!-- Start Services -->
    <div id="services" class="services-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Appointment -->
    <div id="appointment" class="appointment-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Book an Appointment</h2>
                        </div>
                        <form>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name"
                                            class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail"
                                            class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="text"
                                            placeholder="Preferred Date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Department</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="Choose Department">Choose Department</option>
                                            <option value="Gynacology">Gynacology</option>
                                            <option value="Dermatologist">Dermatologist</option>
                                            <option value="Orthology">Orthology</option>
                                            <option value="Anesthesiology">Anesthesiology</option>
                                            <option value="Ayurvedic">Ayurvedic</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Make An
                                            Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Why Appointment with Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis
                                        vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum
                                        quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer
                                        auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appointment -->

    <!-- Start Gallery -->
    <div id="gallery" class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Nuestra ubicación</h2>
                        <p>Visitanos en esta dirección.</p>
                    </div>
                </div>
            </div>

            <div class="popup-gallery row clearfix">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127673.27672509612!2d-78.5022976!3d-0.21626879999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sec!4v1653346745837!5m2!1sen!2sec"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Team -->
    <div id="team" class="team-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Our Doctor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('dist/images/medico2.png') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('dist/images/medico.png') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- End Team -->

    <!-- Start Contact -->
    <div id="address" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="left-contact">
                        <h2>Address</h2>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Address</h4>
                                <p>Fleming 196 Woodside Circle Mobile, FL 36602</p>
                            </div>
                        </div>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Email</h4>
                                <a href="#">demoinfo@gmail.com</a><br>
                                <a href="#">demoinfo@gmail.com</a>
                            </div>
                        </div>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Phone Number</h4>
                                <a href="#">12345 67890</a><br>
                                <a href="#">12345 67890</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Health Lab</a>
                        Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('dist/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ asset('dist/js/slider-index.js') }}"></script>
    <script src="{{ asset('dist/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('dist/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('dist/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('dist/js/isotope.min.js') }}"></script>
    <script src="{{ asset('dist/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
</body>

</html>
