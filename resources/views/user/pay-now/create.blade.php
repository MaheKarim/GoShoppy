@extends('layouts.user.app')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" />
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }
    </style>
@endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-like2 icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Pay Now
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('user.pay-now.index') }}" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fa fa-arrow-circle-left"></i>
                    Back To List
                </a>

            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-12">
                <!-- Form Start -->
                <form action="{{ route('user.pay-now.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Payment Info</h5>
                                    <div class="form-group">
                                        <label for="payment_trackID">Your Payble Order Track ID</label>
                                        <input id="payment_trackID" type="text"
                                               class="form-control @error('payment_trackID') is-invalid @enderror"
                                               name="payment_trackID" placeholder="Ex: 258963147" required autofocus>

                                        @error('payment_trackID')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="payment_sender_acc">Enter your PHN number</label>
                                        <input id="payment_sender_acc" type="text"
                                               class="form-control @error('payment_sender_acc') is-invalid @enderror"
                                               name="payment_sender_acc" placeholder="+8801XX   XXXXXXX" required>

                                        @error('payment_sender_acc')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="payment_sender_traxid">Enter your TraxID</label>
                                        <input id="payment_sender_traxid" type="text"
                                               class="form-control @error('payment_sender_traxid') is-invalid @enderror"
                                               name="payment_sender_traxid" placeholder="10C4TY6H7FE" required>

                                        @error('payment_sender_traxid')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="payment_sender_money">How much you send ?</label>
                                        <input id="payment_sender_money" type="text"
                                               class="form-control @error('payment_sender_money') is-invalid @enderror"
                                               name="payment_sender_money" placeholder="Ex: 1540" required>

                                        @error('payment_sender_money')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                    </div>
                        <div class="col-md-4">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Select Our Payment Service Which You Sent</h5>

                                    <div class="form-group">
                                        <label for="payment_name_id">Select a Service</label>
                                        <select name="payment_name_id" class="form-control select">
                                            @php($statuss = \App\Models\PaymentService::all())
                                            @foreach ($statuss as $status)
                                                <option value="{{ $status->id }}">{{$status->pay_service_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Profile Image Start -->

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-plus-circle"></i>
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>    <script>

        $(document).ready(function() {
            $('.dropify').dropify();
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
