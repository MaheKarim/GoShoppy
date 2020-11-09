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

<!-- Breadcroumb Area -->

<div class="breadcroumb-area bread-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>Order Tracking</h1>
                    <h6><a href="{{ url('/') }}">Home</a> / Order Track</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- faq start-->
<div id="faq" class="faq-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="question-section">
                    <h6>Write Your TRACK ID</h6>
                    <form action="{{ route('order.search') }}" method="get">

                        <input type="text" name="track_id" id="track_id" required placeholder="Tracking ID">
                        <button class="btn btn-primary" type="submit" name="submit">Track Your Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.partials.footer')

@include('frontend.partials.frontendJS')
</body>
<!-- body end -->
</html>
