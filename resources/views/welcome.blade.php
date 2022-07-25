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
    <link rel="stylesheet" href="{{ asset('dist/lab/css/venom-button.min.css') }}">
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
                        <li><a class="nav-link active" href="#home">Inicio</a></li>
                        <li><a class="nav-link" href="#about">Nosotros</a></li>
                        <li><a class="nav-link" href="#services">Servicios</a></li>
                        <li><a class="nav-link" href="#gallery">Ubicación</a></li>
                        <li><a class="nav-link" href="#team">Nuestro Equipo</a></li>
                        <li><a class="nav-link" href="#contact">Contactos</a></li>
                        <li class="none-style"></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a class="nav-link" href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></li>
                            @else
                                <li><a class="nav-link" href="{{ route('login') }}">Inicio de Sesion</a></li>
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
                        style="background-image:url(dist/images/banner_2.jpeg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Bienvenido a tu laboratorio</h1>
                                <p>Sientete seguro con nuestros resultados</p>
                                <a href="#" class="btn">Contactanos</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500"
                        style="background-image:url(dist/images/banner_1.jpeg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Seras atendido por nuestros especialistas</h1>
                                <p>Contamos con equipo calificado para realizar tus analisis</p>
                                <a href="#appointment" class="btn">Obten un turno</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500"
                        style="background-image:url(dist/images/banner_3.jpeg);">
                        <div class="lbox-caption pogoSlider-slide-element">
                            <div class="lbox-details">
                                <h1>Bienvenido a tu laboratorio</h1>
                                <p>Sientete seguro con nuestros resultados</p>
                                <a href="#" class="btn">Contactanos</a>
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
                            <h2>Nosotros</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>Bienvenido al laboratorio Alegria </h2>
                                <p>Somos el laboratorio alegría velamos por la salud y el bienestar de nuestros
                                    pacientes brindando un servicio de calidad con profesionales especializados en
                                    bioquímica clínica sus análisis serán realizados con dedicación y responsabilidad
                                    haciendo a nuestros pacientes nuestra prioridad.
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about-m">
                                    <img src="{{ asset('dist/images/nosotros.jpeg') }}" alt="">
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
                        <h2>Servicios</h2>
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
    <!-- Start Gallery -->
    <div id="gallery" class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Nuestra ubicación</h2>
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
                        <h2>Bioquimicos</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic" style="width: 70%; height:70%;">
                            <img src="{{ asset('dist/images/medico2.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic" style="width: 70%; height:70%;">
                            <img src="{{ asset('dist/images/medico.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- End Team -->

    <!-- Start Contact -->
    <div id="contact" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="left-contact">
                        <h2>Contactanos</h2>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Contactos</h4>
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
    <div id="myDiv"></div>
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

    {{-- <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a> --}}

    <!-- ALL JS FILES -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/lab/js/venom-button.min.js') }}"></script>
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
    <script type="text/javascript">
        $(function() {
            $('#myDiv').venomButton({
                phone: '593962692469',
                message: "Hola, deseo reservar un turno",
                chatMessage: 'Hola 👋<br><br>Como te posdemos ayudar?',
                showPopup: true,
                avatar: '',
                position: "right",
                linkButton: false,
                showOnIE: false,
                nameClient: "Laboratorio Alegria",
                headerTitle: 'Online',
            });
        });
    </script>
</body>

</html>
