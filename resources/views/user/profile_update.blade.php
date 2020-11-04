@extends('layouts.user.app')

@push('css_user')
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
                    <i class="pe-7s-smile icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Profile Management
                </div>
            </div>

        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-12">
                <!-- Form Start -->
                <form action="{{ route('user.profileUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Profile Update</h5>
                                    <!-- Profile Image Start -->
                                    <div class="form-group">
                                        <label for="avatar">Avatar</label>
                                        <input type="file" id="avatar"
                                               class="dropify form-control @error('avatar') is-invalid @enderror"
                                               name="avatar" data-default-file="{{ Auth::user()->getFirstMediaUrl('avatar') }}">
                                        @error('avatar')
                                        <span class="text-danger" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Profile Image End -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">User Basic Info</h5>
                                    <div class="form-group">
                                        <label for="name">User Name</label>
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ Auth::user()->name }}">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ Auth::user()->email  }}" disabled>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input id="phone_number" type="text"
                                               class="form-control @error('phone_number') is-invalid @enderror"
                                               name="phone_number" value="{{ Auth::user()->phone_number }}">

                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="state_name">Current State Name</label>
                                        <input id="state_name" type="text"
                                               class="form-control @error('state_name') is-invalid @enderror"
                                               name="state_name" value="{{ Auth::user()->state_name }}">

                                        @error('state_name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="current_country">Current Living Country</label>
                                        <input id="current_country" type="text"
                                               class="form-control @error('current_country') is-invalid @enderror"
                                               name="current_country" value="{{ Auth::user()->current_country }}">

                                        @error('current_country')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- Button Start-->
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-arrow-circle-up"></i>
                                        Update
                                    </button>
                                    <!-- Button End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js_user')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>    <script>

        $(document).ready(function() {
            $('.dropify').dropify();
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
