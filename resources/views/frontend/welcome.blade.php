<!DOCTYPE html>

<html lang="en">
<!-- head -->
 @include('frontend.partials.header')
<!-- end head -->
<!-- body start-->

<body>
<!-- preloader -->
<div class="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!-- end preloader -->

<!-- top-nav bar start-->
  @include('frontend.partials.navbar')
<!-- top-nav bar end-->
<!-- home slider start-->
<div id="home-slider" class="home-main-block-2 owl-carousel">
    <div class="item home-slider-bg theme-2" style="background-image: url('images/slider/slider-02.jpg')">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="home-block">
                <h1 class="home-slider-heading text-center text-white">Choose the plan to deliver!</h1>
                <div class="home-form">
                    <form class="form-control" method="POST" action="{{ route('store') }}">
                        @csrf

                    <div class="row">
                        <div class="col-lg-3 col-md-7">
                            <label for="client_name">Name <span>*</span></label>
                            <div class="form-group">
                                <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <label for="client_contact">Email / PHN <span>*</span></label>
                            <div class="form-group">
                                <input type="text" id="client_contact" name="client_contact" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label for="couriertype_id">Select Courier Type<span>*</span></label>
                            <select class="form-control" name="couriertype_id" id="couriertype_id">
                                @php($couriertypes = \App\Models\CourierType::all())
                                @foreach ($couriertypes as $item)
                                    <option value="{{ $item->id }}">{{ $item->courier_type_name }}  </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <div class="request-button">
                                <button type="submit" class="btn btn-request">SEND REQUEST<i class="las la-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="home-list text-white">
                    <ul>
                        <li><i class="las la-check-square"></i>Government Approved</li>
                        <li><i class="las la-check-square"></i>Flat Fee - No Hidden Costs</li>
                        <li><i class="las la-check-square"></i>Secure Online Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home slider end-->

<!-- about start-->
<div id="about" class="about-main-block theme-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-left">
                    <img src="{{ asset('/') }}frontend/images/about/about-men-2.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <h1 class="section-heading">We're Top Mover Service <br>in Downtown</h1>
                    <h5 class="wow slideInUp">Digital Solution for your business. We are commited to provide our customer exceptional service while offering our employee the best training.</h5>
                    <p class="wow slideInDown">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi cillum dolore eu fugiat.</p>
                    <div class="key-feature">
                        <i class="las la-chevron-circle-right"></i>
                        <p>Fast Deliveries</p>
                        <i class="las la-chevron-circle-right"></i>
                        <p>Secured Services</p>
                        <i class="las la-chevron-circle-right"></i>
                        <p>Worldwide Shipping</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end-->


<!-- services start -->
<div id="services" class="services-main-block-2" style="background-image: url('images/bg/best-bg.jpg')">
    <div class="container">
        <div class="section text-center">
            <h1 class="section-heading">Our Services</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-service-item">
                    <div class="download-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/service-1.png" class="img-fluid" alt="about-img">
                    </div>
                    <h4>Residential Movers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-service-item">
                    <div class="download-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/service-2.png" class="img-fluid" alt="about-img">
                    </div>
                    <h4>Packaging Goods</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-service-item">
                    <div class="download-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/service-3.png" class="img-fluid" alt="about-img">
                    </div>
                    <h4>Storage Solution</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-service-item">
                    <div class="download-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/service-4.png" class="img-fluid" alt="about-img">
                    </div>
                    <h4>Furniture Assets</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-service-item">
                    <div class="download-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/service-5.png" class="img-fluid" alt="about-img">
                    </div>
                    <h4>Machinery Items</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-service-item">
                    <div class="download-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/service-6.png" class="img-fluid" alt="about-img">
                    </div>
                    <h4>Documents Papers </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services end-->

<!-- facts start-->
<div id="facts" class="facts-main-block" style="background-image: url('images/bg/facts-bg.html')">
    <div class="container">
        <div class="row no-gutters text-white">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="facts-block text-center mrg-btm-30">
                    <h1 class="facts-heading text-white counter">2150</h1><span>+</span>
                    <div class="facts-heading-sign text-white"></div>
                    <div class="facts-dtl">Satisfied Clients</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="facts-block text-center mrg-btm-30">
                    <h1 class="facts-heading text-white counter">100</h1>
                    <div class="facts-heading-sign text-white"></div>
                    <div class="facts-dtl">Offices Worldwide</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="facts-block text-center mrg-btm-30">
                    <h1 class="facts-heading text-white counter">55</h1>
                    <div class="facts-dtl">Countries Covered</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="facts-block text-center mrg-btm-30">
                    <h1 class="facts-heading text-white counter">4.6</h1>
                    <div class="facts-heading-sign text-white"></div>
                    <div class="facts-dtl">Reviews</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- facts end-->

<!--process start-->
<div class="process-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="section-heading">How we work for client</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="single-process-item">
                    <div class="about-points-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/apply-001.png" class="img-fluid" alt="home-icon">
                    </div>
                    <div class="about-point-heading">step 01</div>
                    <h5>Apply Online</h5>
                    <div class="number">01</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="single-process-item">
                    <div class="about-points-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/apply-002.png" class="img-fluid" alt="home-icon">
                    </div>
                    <div class="about-point-heading">step 02</div>
                    <h5>Submit Documents</h5>
                    <div class="number">02</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="single-process-item">
                    <div class="about-points-icon">
                        <img src="{{ asset('/') }}frontend/images/icons/apply-003.png" class="img-fluid" alt="home-icon">
                    </div>
                    <div class="about-point-heading">step 03</div>
                    <h5>Receive Goods</h5>
                    <div class="number">03</div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--process end-->

<!--chooseus start-->
<div class="chooseus-area section-padding" style="background-image: url('images/bg/clients.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-heading">Why Choose Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="single-feature-item">
                    <div class="num">01</div>
                    <div class="feature-content">
                        <h5>Free Estimate</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, omnis!</p>
                    </div>
                </div>
                <div class="single-feature-item">
                    <div class="num">02</div>
                    <div class="feature-content">
                        <h5>24/7 Services</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, omnis!</p>
                    </div>
                </div>
                <div class="single-feature-item">
                    <div class="num">03</div>
                    <div class="feature-content">
                        <h5>Flat Rate Fees</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, omnis!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="feature-image">
                    <img src="{{ asset('/') }}frontend/images/about/about-women.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--chooseus end-->

<!-- testimonial start-->
<div id="testimonial" class="testimonial-main-block theme-3">
    <div class="container">
        <div class="section text-center">
            <h1 class="section-heading">Customer Feedback</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-carousel owl-carousel">
                    <div class="single-team-item">
                        <img src="{{ asset('/') }}frontend/images/testimonial/1.jpg" alt="">
                        <div class="author-desc">
                            <h5>Monica Lisa</h5><span>Photographer</span>
                        </div>
                        <div class="capricorn-icon"><i class="las la-quote-right"></i></div>
                        <p>There are many reseon Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias reprehenderit</p>
                    </div>

                    <div class="single-team-item">
                        <img src="{{ asset('/') }}frontend/images/testimonial/2.jpg" alt="">
                        <div class="author-desc">
                            <h5>Bill Loris</h5><span>Business Man</span>
                        </div>
                        <div class="capricorn-icon"><i class="las la-quote-right"></i></div>
                        <p>There are many reseon Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias reprehenderit</p>
                    </div>

                    <div class="single-team-item">
                        <img src="{{ asset('/') }}frontend/images/testimonial/3.jpg" alt="">
                        <div class="author-desc">
                            <h5>Sarah Fatima</h5><span>Web Developer</span>
                        </div>
                        <div class="capricorn-icon"><i class="las la-quote-right"></i></div>
                        <p>There are many reseon Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias reprehenderit</p>
                    </div>

                    <div class="single-team-item">
                        <img src="{{ asset('/') }}frontend/images/testimonial/4.jpg" alt="">
                        <div class="author-desc">
                            <h5>Michael Carrick</h5><span>Engineer</span>
                        </div>
                        <div class="capricorn-icon"><i class="las la-quote-right"></i></div>
                        <p>There are many reseon Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias reprehenderit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial end-->
<!-- team start-->
<div id="team" class="team-main-block">
    <div class="container">
        <div class="section text-center">
            <h1 class="section-heading">Our Team</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="team"> <img src="{{ asset('/') }}frontend/images/team/1.jpg" class="img-fluid" alt="">
                    <div class="details">
                        <h6>Alex Farguson</h6>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="team"> <img src="{{ asset('/') }}frontend/images/team/2.jpg" class="img-fluid" alt="">
                    <div class="details">
                        <h6>Robert Gill</h6>
                        <span>Supervisor</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="team"> <img src="{{ asset('/') }}frontend/images/team/3.jpg" class="img-fluid" alt="">
                    <div class="details">
                        <h6>Michael Sterk</h6>
                        <span>Sr. Executive</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="team"> <img src="{{ asset('/') }}frontend/images/team/4.jpg" class="img-fluid" alt="">
                    <div class="details">
                        <h6>John Clerk</h6>
                        <span>Front Desk Office</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pricing end-->
<!-- blog start -->
<div id="blog" class="blog-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8">
                <div class="section">
                    <h1 class="section-heading">Recent News</h1>
                </div>
            </div>
            <div class="col-lg-6 col-sm-4">
                <div class="blog-btn">
                    <a href="blog.html" class="btn btn-primary" title="view all">View All<i class="flaticon-next"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 col-md-6">
                <div class="blog-block">
                    <div class="row">
                        <div class="col-xl-5 col-lg-3">
                            <div class="blog-img">
                                <a href="blog-detail.html" title="blog"><img src="{{ asset('/') }}frontend/images/blog/01.png" alt="blog"></a>
                                <div class="meta-dtl">
                                    <a href="#" title="date">
                                        <div class="date">30</div>
                                        <div class="month">Oct</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-9">
                            <div class="blog-dtl">
                                <div class="blog-sub-heading">
                                    <a href="blog-detail.html" title="standard courier">Standard Courier</a>
                                </div>
                                <h6 class="blog-heading"><a href="#" title="blog">Various versions have evols over the years</a></h6>
                                <p>It is a long established fact that and reader will by the readable content page banned.</p>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <a href="blog-detail.html" class="btn btn-link">Read More<i class="las la-arrow-right"></i></a>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-6 text-right">
                                        <div class="blog-icon">
                                            <a href="blog-detail.html" title=""><i class="las la-comment-alt"></i>37</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 col-md-6">
                <div class="blog-block">
                    <div class="row">
                        <div class="col-xl-5 col-lg-3">
                            <div class="blog-img">
                                <a href="blog-detail.html" title="blog"><img src="{{ asset('/') }}frontend/images/blog/02.jpg" alt="blog"></a>
                                <div class="meta-dtl">
                                    <a href="#" title="date">
                                        <div class="date">22</div>
                                        <div class="month">Oct</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-9">
                            <div class="blog-dtl">
                                <div class="blog-sub-heading">
                                    <a href="blog-detail.html" title="ware house">Ware House</a>
                                </div>
                                <h6 class="blog-heading"><a href="#" title="blog">Words which don&apos;t looked a slightly believable</a></h6>
                                <p>It is a long established fact that and reader will by the readable content page banned.</p>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <a href="blog-detail.html" class="btn btn-link">Read More<i class="las la-arrow-right"></i></a>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-6 text-right">
                                        <div class="blog-icon">
                                            <a href="blog-detail.html" title=""><i class="las la-comment-alt"></i>40</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog end-->

<!-- clients start-->
<div id="clients" class="clients-main-block">
    <div class="container">
        <div class="row">
            <div id="clients-slider" class="clients-slider owl-carousel">
                <div class="item-clients-img">
                    <img src="{{ asset('/') }}frontend/images/clients/01.png" class="img-fluid" alt="clients-1">
                </div>
                <div class="item-clients-img">
                    <img src="{{ asset('/') }}frontend/images/clients/02.png" class="img-fluid" alt="clients-2">
                </div>
                <div class="item-clients-img">
                    <img src="{{ asset('/') }}frontend/images/clients/03.png" class="img-fluid" alt="clients-3">
                </div>
                <div class="item-clients-img">
                    <img src="{{ asset('/') }}frontend/images/clients/04.png" class="img-fluid" alt="clients-4">
                </div>
                <div class="item-clients-img">
                    <img src="{{ asset('/') }}frontend/images/clients/05.png" class="img-fluid" alt="clients-4">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- clients end-->

<!-- footer start-->
@include('frontend.partials.footer')
<!-- footer end-->
 @include('frontend.partials.frontendJS')

</body>
<!-- body end -->
</html>
