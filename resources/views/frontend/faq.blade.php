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
                    <h1>Helpful FAQ</h1>
                    <h6><a href="{{ url('/') }}">Home</a> / FAQ</h6>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- faq start-->
<div id="faq" class="faq-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h6>Customer Query</h6>
                    <h2>Frequently Asked Question</h2>
                </div>

                <div class="styled-faq">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach($faqs as $faq)
                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingEight">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        {{ $faq->faq_ques }}
                                        <i class="las la-angle-up"></i>
                                        <i class="las la-angle-down"></i>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    {{ $faq->faq_ans }}
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="question-section">
                    <h6>Have any Question?</h6>
                    <form action="http://capricorn-theme.net/html/excelsure/sendemail.php">
                        <input type="text" name="name" id="name" required="" placeholder="Full Name">
                        <input type="email" name="email" id="email" required="" placeholder="Your E-mail">
                        <textarea name="message" id="message" cols="30" rows="10" required="" placeholder="How can help you?"></textarea>
                        <button class="btn btn-primary" type="submit" name="submit">Your Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq end-->

<!-- clients Image-->

<!-- clients Image end-->

<!-- footer start-->
<!-- footer end-->
@include('frontend.partials.footer')
<!-- Scroll Top Area -->

@include('frontend.partials.frontendJS')

</body>
<!-- body end -->

</html>
