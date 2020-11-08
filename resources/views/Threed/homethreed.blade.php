<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SITE TITLE -->
    <title>IdeaLabs</title>

    <!-- =========================
       Meta Information
    ============================== -->
    <meta name="description" content="KreFolio - Startup Agency Landing Page Template">
    <meta name="keywords" content="KreFolio, KreFolio html template, Free Bootstrap template, Responsive onepage template">
    <meta name="author" content="Zahidul Hossain @choyan">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

    <!-- =========================
       favicon and app touch icon
    ============================== -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/animate.min.css">

    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/typography.css">

    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/css/nivo-lightbox-default.css">
    <link rel="stylesheet" href="/css/jquery.circliful.css">

    <!-- ***** Custom Stylesheet ***** -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Header scripts -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/js/queryloader2.min.js"></script>

    <!-- =========================
       Preloader
    ============================== -->

    <style>
  .imge {
   width: 182px !important;
}
    </style>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- =========================
       Fullscreen menu
    ============================== -->
    <div class="mobilenav">
        <ul>


            <li data-rel="#header">
                <a href="/" class="nav-label">Home</a>
            </li>
            <li data-rel="#about-us">
                <a href="#" class="nav-label">About Us</a>
            </li>
            <li data-rel="#why-choose-us">
                <a href="#" class="nav-label">Why Choose Us</a>
            </li>
            @auth
            <li>
                <a href="/dashboard" class="nav-label">Dashboard</a>
            </li>
            @else
            <li>
                <a href="/login" class="nav-label">Login</a>
            </li>
            <li>
                <a href="/register" class="nav-label">Register</a>
            </li>
            @endauth
                     <li data-rel="#case-study">
                <a href="#" class="nav-label">Contact Us</a>
            </li>

        </ul>
    </div>  <!-- *** end Full Screen Menu *** -->

    <!-- *****  hamburger icon ***** -->
    <a href="javascript:void(0)" class="menu-trigger">
       <div class="hamburger">
         <div class="menui top-menu"></div>
         <div class="menui mid-menu"></div>
         <div class="menui bottom-menu"></div>
       </div>
    </a>


    <!-- =========================
       Header
    ============================== -->
    <header id="header">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <!-- *****  Logo ***** -->
                <div class="logo-container">

                        <img src="/img/Ideamockup.png" width="400px" height="300px" alt="">

                </div>

                <!-- =========================
                   Header item 1
                ============================== -->
                @foreach ($gifs as $key=>$gif)

                    @if($key==0)
                <div class="item active">
                    @else
                    <div class="item">

                    @endif

                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('{{asset('/Gif/'.$gif->gif)}}');">
                    </div>
                    <div class="carousel-caption">

                        <div class="call-button">
                            <div class="row button1">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

             @endforeach



            </div> <!-- *** end wrapper *** -->

            <!-- Carousel Controls -->
            <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
                <span class="icon-prev icon-arrow-left"></span>
            </a>
            <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
                <span class="icon-next icon-arrow-right"></span>
            </a>
        </div>
    </header> <!-- *** end Header *** -->


    <!-- =========================
       Call to action
    ============================== -->
    <section id="call-to-action" class="call-to-action main-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 wow slideInLeft animated">
                    <p class="light-text">Like What You See? We're Just Getting Started</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 button-container wow slideInRight animated">
                    <a href="#portfolio" class="button light internal-link pull-left hvr-grow" data-rel="#portfolio">View Works</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section> <!-- *** end call-to-action *** -->


    <!-- =========================
       About Us
    ============================== -->
    <section id="about-us" class="about-us">
        <div class="overlay">
            <div class="container padding-top-large">
                <h2>
                    <strong class="bold-text">About</strong>
                    <span class="light-text main-color">US</span>
                </h2>
                <div class="line main-bg"></div>
                <div class="row margin-bottom-medium">
                    <div class="col-md-7">
                        <div class="jumbo-text light-text margin-top-medium wow slideInLeft" data-wow-duration="2s">
                            Welcome, <br> <strong class="bold-text">Aboard a tour of IDEALABS with us.</strong><br>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-side-side.png" alt="About Us Big Image" class="center-block img-responsive">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p class="margin-bottom-medium wow slideInUp">Taking the initial step in 2012, we assimilated all our past experiences in various subfields like VFX etc and professional exp. Like  POST PRODUCTION PIPELINE time management in huge projects and adding to it a gist of our inner likeness of creating some beautiful and artistic works for self love of this including beautiful pictures to single frame storytelling frames……. And all this made us realize one thing , any project done with a mix of originality , dedication and creative love results in a truly splendid artwork.
                    So here we are, presenting you IDEALABS – that has a tinge of of everything your thoughts need to convert into a lively idea… serving you with in innate experience of working in 255+ big projects, working for 18729 hrs, though we had some 2600+ coffee mugs for tht.
                    We know trust factor in present world is in decline, but here are some key points abt idealabs and its team, to give you an idea about our future partnerships and clients approach. <br><br>
               Deepanshu singh<br>
Founder of idealabs (At bottom of image)

                    </p>
                <div class="row margin-top-large">
                    <div class="col-md-8">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <!-- =========================
                               Collapsible Panel 1
                            ============================== -->





                        </div> <!-- *** end panel-group *** -->
                    </div> <!-- *** end col-md-8 *** -->
                    <div class="col-md-4">
                        <!-- <img src="img/case-studdy-people.png" class="center-block img-responsive" alt="Case Study"> -->
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- *** end About Us *** -->





    <!-- =========================
       Why Coose Us
    ============================== -->
    <section id="why-choose-us" class="why-choose-us">
        <div class="container margin-top-large">
            <h2>
                Why
                <strong class="bold-text">Choose</strong>
                <span class="light-text main-color">IdeaLabs</span>
            </h2>
            <div class="line main-bg margin-bottom-large"></div>

            <div class="row text-center">

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-idea"></i></div>
                        <h4><strong>Experience</strong></h4>
                        <p>10 years of Experience</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-heart"></i></div>
                        <h4><strong>Clients satisfaction</strong></h4>
                        <p>Helping Our Clients is Our sole key.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-office"></i></div>
                        <h4><strong>Professional Design</strong></h4>
                        <p>we will provide professional outlook to ideas.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-mobile"></i></div>
                        <h4><strong>Work Quality</strong></h4>
                        <p>Superfine, industry level art quality and On time – punctuality.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-code"></i></div>
                        <h4><strong>Production Knowledge</strong></h4>
                        <p>Great production knowledge with creative, Innnovative techniques.</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-web-browser"></i></div>
                        <h4><strong>Updated Technologies</strong></h4>
                        <p>We work with all latest and trending technology along with industries high end tools and software's.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- *** end row *** -->
        </div> <!-- *** end container *** -->
    </section> <!-- *** end Why Choose Us *** -->



    <!-- =========================
       Promote
    ============================== -->
    <section id="promote" class="promote main-bg white-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-4 text-center">
                    <p class="light-text">Contact us! We make you smile :)</p>
                </div>
                <div class="col-lg-6 col-lg-offset-1 col-md-7 col-sm-8 button-container">
                    <button class="button light hvr-grow" data-toggle="modal" data-target="#contact-form" style="background: #6f75a9;">Enquiry</button>
                </div>
            </div>
        </div>
    </section> <!-- *** end promote *** -->


    <!-- =========================
       Portfolio
    ============================== -->
    <section id="portfolio" class="portfolio padding-large text-center">
        <div class="container margin-bottom-medium">
            <div class="row margin-bottom-medium wow fadeInUp">
                <h2>
                    Our
                    <strong class="main-color bold-text">Works</strong>
                </h2>
                <div class="line main-bg"></div>

                <div class="col-md-10 col-md-offset-1">
                    <div class="subtitle">Check out some of our latest and greatest projects.</div>

                </div>
            </div> <!-- *** end row *** -->

            <!-- *****  Portfolio Filters ***** -->
            <div class="filters">
                <ul class="wow lightSpeedIn">
                    <li><a href="/">All</a></li>
                    <li><a href="/all_twod">2D Animation</a></li>
                    <li><a href="/all_threed" class="active">3D Animation</a></li>
                    <li><a href="/all_vfx">VFX</a></li>
                    <li><a href="/all_walk">Architecture Walkthrough</a></li>
                    <li><a href="/all_brand">Bussiness Branding</a></li>
                    <li><a href="/all_web">Website and App Devlopment</a></li>
                    <li><a href="/all_voice">Voiceover</a></li>
                </ul>
            </div> <!-- *** end filters *** -->
        </div> <!-- *** end container *** -->




   <div class="container">
        <!-- *****  Portfolio  wrapper ***** -->
        <div class="portfolio-wrapper margin-bottom-medium row">

            <!-- =========================
               Portfolio item
            ============================== -->
@foreach($threeds as $threed)
    <div class="portfolio-item twod col-md-4 product-box" style="position: absolute; left: 0px; top: 0px; width: 379px;border-style: solid; border-color: white;">
        <div class="portfolio">
            <a href="#" data-lightbox-gallery="portfolio">
                <img src="{{asset('/titleImage/'.$threed->titleImage)}}" alt="Portfolio 1"/><!-- END PORTFOLIO IMAGE -->
                <div class="portfolio-overlay hvr-rectangle-out">
                    <h2 class="margin-bottom-small">
                        Our
                        <strong class="white-color bold-text">Portfolios</strong>
                    </h2>
                    <div type="button" class="button modelData" rel="{{$threed->id}}" data-toggle="modal" data-target=".bs-example-modal-center">View Project</div>
                </div><!-- END PORTFOLIO OVERLAY -->
            </a>
       </div>
    </div> <!-- *** end portfolio-item *** -->


    @endforeach




             <!-- *** end  portfolio-item *** -->
        </div> <!-- *** end  portfolio-wrapper *** -->



    </div>
    {{ $threeds->links('vendor.pagination.bootstrap-4') }}



    </section> <!-- *** end Portfolio *** -->



        <!-- =========================
           Why Coose Us
        ============================== -->
        <section id="why-choose-us" class="why-choose-us">
            <div class="container margin-top-large">
                <h2>
                    <strong class="light-text main-color">Softwares</strong>
                </h2>
                <div class="line main-bg margin-bottom-large"></div>

                <div class="row text-center">

                    <!-- *****  Service Single ***** -->
                    <div class="col-md-4">
                        <div class="service wow slideInLeft">
                            <div class="icon"><i class="icon-idea"></i></div>
                            <h4>3D <strong>Max</strong></h4>

                        </div>
                    </div>

                    <!-- *****  Service Single ***** -->
                    <div class="col-md-4">
                        <div class="service wow fadeInUp">
                            <div class="icon"><i class="icon-heart"></i></div>
                            <h4>Maya<strong> </strong></h4>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service wow slideInRight">
                            <div class="icon"><i class="icon-office"></i></div>
                            <h4><strong>After</strong> Effect</h4>

                        </div>
                    </div>

                    <!-- *****  Service Single ***** -->
                    <div class="col-md-4">
                        <div class="service wow slideInLeft">
                            <div class="icon"><i class="icon-mobile"></i></div>
                            <h4><strong>Lumion</strong> </h4>

                        </div>
                    </div>

                    <!-- *****  Service Single ***** -->
                    <div class="col-md-4">
                        <div class="service wow fadeInUp">
                            <div class="icon"><i class="icon-code"></i></div>
                            <h4><strong>Photoshop</strong> </h4>

                        </div>
                    </div>

                    <!-- *****  Service Single ***** -->
                    <div class="col-md-4">
                        <div class="service wow slideInRight">
                            <div class="icon"><i class="icon-web-browser"></i></div>
                            <h4><strong>Illustartion</strong> </h4>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- *** end row *** -->
            </div> <!-- *** end container *** -->
        </section> <!-- *** end Why Choose Us *** -->

        <!-- numbers and cup div -->

          <div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70" data-bg="assets/img/fun-fact-bg.jpg" style="display: block;">
        <div class="container1" style="display: block;">
            <div class="row1 mtn-40" style="display: block;">
                <div class="col-6 col-md-3 text-center" style="display: block;">
                    <div class="counter-item" style="display: block;">
                        <h2 class="counter-number" style="color: #fe6c61;"><span class="counter">18792</span></h2>
                        <h6 class="counter-txt" style="color: white;font-size: 20px;">Hourse of Experience</h6>
                    </div>
                </div>

                <div class="col-6 col-md-3 text-center" style="display: block;">
                    <div class="counter-item" style="display: block;">
                        <h2 class="counter-number" style="color: #fe6c61;"><span class="counter">236</span></h2>
                        <h6 class="counter-txt" style="color: white;font-size: 20px;">Great Project</h6>
                    </div>
                </div>

                <div class="col-6 col-md-3 text-center" style="display: block;">
                    <div class="counter-item" style="display: block;">
                        <h2 class="counter-number" style="color: #fe6c61;"><span class="counter">2610 </span></h2>
                        <h6 class="counter-txt" style="color: white;font-size: 20px;">Cups Of Coffee</h6>
                    </div>
                </div>


                <div class="col-6 col-md-3 text-center" style="display: block;">
                    <div class="counter-item" style="display: block;">
                        <h2 class="counter-number" style="color: #fe6c61;"><span class="counter">3580</span></h2>
                        <h6 class="counter-txt" style="color: white;font-size: 20px;">Many More</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- =========================
            Case Study
         ============================== -->
         <section id="promote" class="main-bg white-color">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-4 text-center">
                         <p class="light-text"> </p>
                     </div><p class="contact">Contact us</p>

                 </div>

             </div>
         </section> <!-- *** end promote *** -->

         <section id="case-study" class="case-study">
             <div class="row mar-none mat-none">

                 <!-- *****  Case Study Left ***** -->
                 <div class="col-md-6 case-study-left wow slideInLeft">
                     <div class="overlay padding-large text-right">
                         <div class="description">
                             <h3 class="margin-bottom-small light-text">Email:<br>
                            aniketjadhav@gmail.com</h3>

                         </div>
                     </div>
                 </div>

                 <!-- *****  Case Study Right ***** -->
                 <div class="col-md-6 case-study-right wow slideInRight">
                     <div class="overlay padding-large">
                         <div class="description">
                             <h3 class="margin-bottom-small light-text">Mobile Number:<br>
                            1234567812</h3>

                         </div>
                     </div>
                 </div>
             </div>
         </section><!-- *** end Case Study *** -->








    <!-- =========================
       Send Message
    ============================== -->
    <section id="send-message" class="send-message main-bg white-color text-center">

        <p class="light-text">Have any <span class="bold-text">project</span>? Send a <span class="bold-text">message</span ></p>

        <!-- Contact Form Modal -->
        <div class="modal fade contact-form" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="contact-form" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">

                        <!-- *****  Contact form ***** -->
                        <form class="form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="first-name" placeholder="First name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="last-name" placeholder="Last name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="email" placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="project-name" placeholder="Project name">
                                </div>
                                <div class="form-group col-md-12 mab-none">
                                    <textarea rows="6" class="form-control" id="description" placeholder="Your project details and description ..."></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="button bold-text main-bg"><i class="fa fa-paper-plane"></i></div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- *** end modal-body *** -->
                </div> <!-- *** end modal-content *** -->
            </div> <!-- *** end modal-dialog *** -->
        </div> <!-- *** end Contact Form modal *** -->
    </section> <!-- *** end Send Message *** -->


    <!-- =========================
       Footer
    ============================== -->
    <footer id="footer" class="footer">
        <div class="container padding-large text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <figure class="margin-bottom-medium">
                        <img class="imge"  src="/img/Ideamockup1.png" class="footer-logo" alt="Krefolio">
                    </figure>


                    <!-- =========================
                       Social icons
                    ============================== -->
                    <ul class="social margin-bottom-medium">
                        <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <p class="copyright">
                        &copy; Copyright 2020 IdeaLabs - All Rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer> <!-- *** end Footer *** -->

    @include('Models.allVideo')
    <!-- =========================
     JavaScripts
    ============================== -->
    <script src="/js/vendor/jquery-1.11.1.js"></script>
    <script src="/js/vendor/jquery-migrate-1.2.1.min.js"></script>

    <script src="/js/twitterFetcher_min.js"></script>
    <script src="/js/vendor/bootstrap.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/appear.js"></script>
    <script src="/js/jquery.circliful.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/nivo-lightbox.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/main.js"></script>

    <script>
        jQuery('.modelData').click(function (e) {
                    e.preventDefault();
                    $.ajax({
         type:'POST',
         url:'/video_3d/'+$(this).attr('rel'),
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         success:function(data){
            $('#name').html(data.title);
             $('#content').html('<video width="500" height="400" controls autoplay><source src="/Videos/""'+data.video+'" type="video/mp4"></video>');


         }
      });
                });
    </script>
</body>
</html>
