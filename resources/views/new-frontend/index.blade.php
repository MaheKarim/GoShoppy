<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name')  }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('/') }}new-frontend/image/favicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}new-frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}new-frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}new-frontend/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}new-frontend/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}new-frontend/css/style.css">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-91615293-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top" data-spy="affix" data-offset-top="100">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <ul class="contact">
                    <li class="phone">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <span>1-234-567-8000</span>
                    </li>
                    <li class="mail hidden-xs">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>tranship@mail.com</span>
                    </li>
                    <li class="time hidden-xs">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span>Sat - Thu: 8AM - 7PM </span>
                    </li>
                </ul>
                <ul class="social">
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-nav">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img alt="" src="{{ asset('/') }}new-frontend/image/logo.png" srcset="{{ asset('/') }}new-frontend/image/logo.png 1x, image/logo2x.png 2x"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav ">
                        <li><a href="index-2.html">home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li class="dropdown">
                            <a href="service.html" class="dropdown-toggle">Our Services <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="service-single.html">Land Transport</a></li>
                                <li><a href="service-single-2.html">Warehousing</a></li>
                                <li><a href="service-single.html">Fast Delivery</a></li>
                                <li><a href="service-single-2.html">Worldwide Transport</a></li>
                                <li><a href="service-single.html">Sea Freight</a></li>
                                <li><a href="service-single-2.html">Reliable</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-md-4 npl hidden-xs hidden-sm">
                                    <div class="imagebg">
                                        <img alt="" src="{{ asset('/') }}new-frontend/image/mega.jpg">

                                    </div>
                                </li>
                                <li class="col-md-8 col-sm-12">
                                    <ul class="menu-wrapper row">
                                        <li class="col-sm-4">
                                            <ul class="n-0-b megacontent">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="about-us-extend.html">About Us - Extend</a></li>
                                                <li><a href="teams.html">Our Team</a></li>
                                                <li><a href="faqs.html">Faqs </a></li>
                                                <li><a href="faqs-extend.html">Faqs - Extend</a></li>
                                                <li><a href="products.html">Product Lists</a></li>
                                                <li><a href="product-single.html">Product Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-4">
                                            <ul class="megacontent">
                                                <li><a href="service.html">Service List</a></li>
                                                <li><a href="service-extend.html">Service List - Extend</a></li>
                                                <li><a href="service-single.html">Service Single</a></li>
                                                <li><a href="service-single-2.html">Service Single - Extend</a></li>
                                                <li><a href="projects.html">Project List</a></li>
                                                <li><a href="projects-extend.html">Project List - Extend</a></li>
                                                <li><a href="project-single.html">Project Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-4">
                                            <ul class="megacontent">
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="gallery-extend.html">Gallery - Extend</a></li>
                                                <li><a href="gallery-photos.html">Photo Gallery</a></li>
                                                <li><a href="gallery-photos-all.html">Photo Gallery - All</a></li>
                                                <li><a href="error-404.html">Error 404</a></li>
                                                <li><a href="megamenu.html">Mega Menu  <span class="label label-warning">New</span></a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>

                        @if (auth()->check())
                            <li><a class="btn btn-quote trns-btn" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @else
                            <li><a class="btn btn-quote trns-btn" href="{{ route('login') }}">Login</a></li>
                        @endif

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
</nav>
<!-- End navabr -->

<!-- Banner -->
<div id="slider"  class="banner carousel slide carousel-fade">
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('{{ asset('/') }}new-frontend/image/banner.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text">
                                <div class="animated fadeInRight">
                                    <h1>PROVIDING FIRST CLASS <br> LOGISTIC SERVICES</h1>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    <div class="btn-banner">
                                        <a class="btn solid-btn" href="service.html">our services</a>
                                        <a class="btn solid-btn" href="get-a-quote.html">get a quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('{{ asset('/') }}new-frontend/image/banner-2.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text f-w text-center w-color">
                                <div class="animated fadeInUp">
                                    <h1 class="w-heading">WORLD CLASS <br> SHIPPING SERVICES</h1>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    <div class="btn-banner">
                                        <a class="btn solid-btn" href="service.html">our services</a>
                                        <a class="btn trns-btn-w" href="get-a-quote.html">get a quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('{{ asset('/') }}new-frontend/image/banner-3.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text text-right w-color pull-right">
                                <div class="animated fadeInLeft">
                                    <h1 class="w-heading">WORLD WIDE <br> TRANSPORT SERVICE</h1>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    <div class="btn-banner animated">
                                        <a class="btn solid-btn" href="service.html">our services</a>
                                        <a class="btn trns-btn-w" href="get-a-quote.html">get a quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- End banner -->

<!-- Main content -->
<div class="main-content about-us section-pad">
    <div class="container">
        <div class="row">
            <div class="about-wrapper row">
                <div class="col-md-6 res-m-bttm featured-tabs">
                    <div class="tab-custom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><img alt="" src="{{ asset('/') }}new-frontend/image/tab-truck.png"><br>Land Transport</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img alt="" src="{{ asset('/') }}new-frontend/image/tab-plane.png"><br>Worldwide Transport</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img alt="" src="{{ asset('/') }}new-frontend/image/tab-ware.png"><br>Own Warehousing</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <h4>Land Transport</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                                <a class="btn trns-btn" href="service-single.html">Read More</a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <h4>Worldwide Transport</h4>
                                <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit . Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam, sed quia consequuntur magni dolores.</p>
                                <a class="btn trns-btn" href="#">Read More</a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <h4>Own Warehousing</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                                <a class="btn trns-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h4 class="section-heading">About us</h4>
                        <h2 class="focus-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea...</p>
                        <a class="btn trns-btn" href="about-us.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main content -->

<!-- Call  action -->
<div class="call-action has-parallax" style="background: url('image/call-action-bg.jpg');">
    <div class="overly">
        <div class="container">
            <div class="row">
                <h2>we are dedicated to provide the best services <br> at the lowest possible cost</h2>
                <a class="btn solid-btn" href="#">get a quote</a>
            </div>
        </div>
    </div>
</div>
<!-- End call action -->

<!-- Featured of Service -->
<div class="service section-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <h4 class="section-heading">WHY  CHOOSE US</h4>
                <p>Lorem ipsum dolor sit amet consectetur to adipiscing elit, sed dot eiusmod tempor incididunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullamco laboris nisiut.</p>
            </div>
            <div class="clearfix"></div>
            <ul class="service-wrapper row">
                <li class="col-md-3 col-sm-6 res-m-bttm">
                    <div class="icon-wrapper">
                        <img alt="" src="{{ asset('/') }}new-frontend/image/ser-secure.png">
                    </div>
                    <h4>Secure</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant iudol oremq dauri.</p>
                </li>
                <li class="col-md-3 col-sm-6 res-m-bttm">
                    <div class="icon-wrapper">
                        <img alt="" src="{{ asset('/') }}new-frontend/image/ser-truck.png">
                    </div>
                    <h4>fast delivery</h4>
                    <p>Accusan tiused ut perspiciatis unde omnis iste natus error sit voluptatem  dolore mque.</p>
                </li>
                <li class="col-md-3 col-sm-6 res-m-bttm">
                    <div class="icon-wrapper">
                        <img alt="" src="{{ asset('/') }}new-frontend/image/ser-track.png">
                    </div>
                    <h4>Trackable</h4>
                    <p>Voluptatem sed ut perspiciatis unde omnis iste natus error sit accusantiu dolo remque laud.</p>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="icon-wrapper">
                        <img alt="" src="{{ asset('/') }}new-frontend/image/ser-cup.png">
                    </div>
                    <h4>Reliable</h4>
                    <p>Perspiciatis sed ut  unde omnis iste natus error sit voluptatem accusantiu dolor emques.</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Featured -->



<!-- Statistics -->
<div class="statistics has-parallax" style="background: url('image/stat-bg.jpg');">
    <div class="overly">
        <div class="container">
            <div class="row">
                <div class="stat-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 stat-col">
                            <div class="stat-top">
                                <i class="fa fa-calendar" aria-hidden="true"></i><span class="counter">15</span>
                            </div>
                            <p>Offices Worldwide</p>
                        </div>
                        <div class="col-md-3 col-sm-6 stat-col">
                            <div class="stat-top">
                                <i class="fa fa-users" aria-hidden="true"></i><span class="counter">97</span>
                            </div>
                            <p>Hardworking People</p>
                        </div>
                        <div class="col-md-3 col-sm-6 stat-col">
                            <div class="stat-top">
                                <i class="fa fa-globe" aria-hidden="true"></i><span class="counter">12</span>
                            </div>
                            <p>Countries Covered</p>
                        </div>
                        <div class="col-md-3 col-sm-6 stat-col">
                            <div class="stat-top">
                                <i class="fa fa-users" aria-hidden="true"></i><span class="counter">25</span>
                            </div>
                            <p>Years of Experiences</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End statistics -->

<!-- testimonial & video -->
<div class="testi-video section">
    <div class="container">
        <div class="row">
            <div class="tstvideo-wrapper row">
                <div class="col-md-6 res-m-bttm">
                    <div class="testimonial no-dots">
                        <h5 class="meta-head">Our Happy</h5>
                        <h4 class="section-heading">Client Says</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur t adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam quis.</p>
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="testimonial-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                    <div class="profile">
                                        <img alt="" src="{{ asset('/') }}new-frontend/image/profile-img.jpg">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="testimonial-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                    <div class="profile">
                                        <img alt="" src="{{ asset('/') }}new-frontend/image/profile-img.jpg">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                    <div class="profile">
                                        <img alt="" src="{{ asset('/') }}new-frontend/image/profile-img.jpg">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 video">
                    <h5 class="meta-head">Watch the video and take </h5>
                    <h4 class="section-heading">some idea about our company</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    <div class="video-wrapper">
                        <iframe height="300" width="480" src="https://www.youtube.com/embed/e9P0gyAH_QE"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End testimonial & video -->

<!-- Client logo -->
<div class="cl-logo section-pad">
    <div class="container">
        <div class="row">
            <div class="owl-carousel loop logo-carousel">
                <div>
                    <img alt="" width="190" height="82" src="{{ asset('/') }}new-frontend/image/cl-logo1.png">
                </div>
                <div>
                    <img alt="" width="190" height="82" src="{{ asset('/') }}new-frontend/image/cl-logo2.png">
                </div>
                <div>
                    <img alt="" width="190" height="82" src="{{ asset('/') }}new-frontend/image/cl-logo3.png">
                </div>
                <div>
                    <img alt="" width="190" height="82" src="{{ asset('/') }}new-frontend/image/cl-logo4.png">
                </div>
                <div>
                    <img alt="" width="190" height="82" src="{{ asset('/') }}new-frontend/image/cl-logo5.png">
                </div>
                <div>
                    <img alt="" width="190" height="82" src="{{ asset('/') }}new-frontend/image/cl-logo6.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client logo -->

<!-- footer widget-->
<div class="footer-widget section-pad">
    <div class="container">
        <div class="row">
            <div class="widget-container row">
                <div class="footer-col about-us col-md-3 col-sm-6 res-m-bttm">
                    <h5 class="heading-col">about us</h5>
                    <div class="bottom-des">
                        <div class="about-des">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <a href="about-us.html">Read More...</a>
                        </div>
                        <div class="subscribe">
                            <form id="subscribe-me" action="http://demo.themenio.com/tranship/form/subscribe.php" method="post">
                                <input name="EMAIL" class="form-control required email" type="email" placeholder="Email for Newsletter">
                                <input type="text" class="hidden" name="form-anti-honeypot" value="">
                                <input type="submit" name="submit" value="Signup"  class="submit">
                                <div class="form-results"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-col navigation col-md-2 col-md-offset-1 col-sm-6 res-m-bttm">
                    <h5 class="heading-col">navigation</h5>
                    <ul class="bottom-des">
                        <li >
                            <a href="index.html">Home</a>
                        </li>
                        <li >
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li >
                            <a href="blog.html">Blog</a>
                        </li>
                        <li >
                            <a href="service.html">Our services</a>
                        </li>
                        <li >
                            <a href="contact.html">Contact us</a>
                        </li>
                        <li >
                            <a href="#">Sitemap </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col service-col col-md-3 col-sm-6 res-m-bttm">
                    <h5 class="heading-col">our services</h5>
                    <ul class="bottom-des">
                        <li >
                            <a href="service-single.html">Land Transport</a>
                        </li>
                        <li >
                            <a href="service-single.html">Warehousing</a>
                        </li>
                        <li >
                            <a href="service-single.html">Fast Delivery</a>
                        </li>
                        <li >
                            <a href="service-single.html">Worldwide Transport</a>
                        </li>
                        <li >
                            <a href="service-single.html">Sea Freight</a>
                        </li>
                        <li >
                            <a href="service-single.html">Reliable</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col contact col-md-3 col-sm-6">
                    <h5 class="heading-col">contact us</h5>
                    <ul class="bottom-des contact-des">
                        <li>
                            <i class="fa fa-map" aria-hidden="true"></i>
                            <span>1234 Sed ut perspiciatis Road,
								<br>At vero eos, D58 8975, London.</span>
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>Toll Free : (123) 4567 8910<br>
								Telephone : (123) 1234 5678</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Email : <a href="#">info@sitename.com</a><br>
								Web : <a href="#">www.sitename.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End footer widget -->

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
				<span>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>
 				2017 Tranship. All Rights Reserved. Template by <a href="#" target="_blank">Softnio.</a></span>
            <ul class="social">
                <li>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End copyright -->

<!-- preload slider image for carousel -->
<div class="preload hide">
    <img alt="" src="{{ asset('/') }}new-frontend/image/banner.jpg">
    <img alt="" src="{{ asset('/') }}new-frontend/image/banner-2.jpg">
    <img alt="" src="{{ asset('/') }}new-frontend/image/banner-3.jpg">
</div>
<!-- End -->
<!-- Preloader -->
<div id="preloader"><div id="status">&nbsp;</div></div>
<!-- Preloader End -->
<!-- Base Script -->
<script src="{{ asset('/') }}new-frontend/js/jquery.min.js"></script>
<script src="{{ asset('/') }}new-frontend/js/bootstrap.js"></script>
<script src="{{ asset('/') }}new-frontend/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}new-frontend/js/parallaxie.js"></script>
<!-- Form Plugin -->
<script src="{{ asset('/') }}new-frontend/js/form.plugins.js"></script>
<!-- Theme Script init() -->
<script src="{{ asset('/') }}new-frontend/js/scriptc64e.js?ver=1.1.1"></script>
<!-- End script -->
</body>

</html>
