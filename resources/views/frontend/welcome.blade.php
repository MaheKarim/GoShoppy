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
                    <form  method="POST" action="{{ route('store') }}">
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
                                <input type="text" id="client_contact" name="client_contact" class="form-control" placeholder="Email / PHN " required>
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

<!-- clients end-->

<!-- footer start-->
@include('frontend.partials.footer')
<!-- footer end-->
 @include('frontend.partials.frontendJS')

</body>
<!-- body end -->
</html>
