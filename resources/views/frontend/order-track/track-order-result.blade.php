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
            <div class="col-lg-4">
                <div class="question-section">
                    <h6>Write Your TRACK ID</h6>
                    <form action="{{ route('order.search') }}" method="get">
                        <input type="text" name="track_id" id="track_id" required placeholder="Tracking ID">
                        <button class="btn btn-primary" type="submit">Track Your Product</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                @if($order != NULL)
                <div class="main-card mb-3 card">
                    <div class="card-body p-0">
                        <table class="table table-hover mb-0">
                            <tbody>
                            <tr>
                                <th>Order Created</th>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Sender Name</th>
                                <td>{{ $order->User->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $order->product_name }}</td>
                            </tr>
                            <tr>
                                <th>Receiver Name</th>
                                <td>{{ $order->recvr_name }}</td>
                            </tr>
                            <tr>
                                <th>Receiver PHN</th>
                                <td>{{ $order->recvr_phn_number1 }}</td>
                            </tr>

                            <tr>
                                <th>Payment Status</th>
                                <td>{{ $order->comment }}</td>
                            </tr>
                            <tr>
                                <th>Delivery Time</th>
                                <td>{{ $order->delivery_time }} Days </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                @else
                    <div class="card text-white bg-danger mb-2" style="max-width: 25rem;">
                        <div class="card-header">Order ID</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">NO Track ID Found</h5><br> <br> <br>
                            <p class="card-text">Please Search Again with Valid TrackID</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@include('frontend.partials.footer')

@include('frontend.partials.frontendJS')
</body>
<!-- body end -->
</html>
