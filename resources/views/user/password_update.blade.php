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
                    <i class="pe-7s-helm icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Password Change
                </div>
            </div>

        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-12">
                <!-- Form Start -->
                <form action="{{ route('user.profile.password.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-11">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Update Password</h5>

                                    <div class="form-group">
                                        <label for="old_password">Old Password</label>
                                        <input id="old_password" type="password"
                                               class="form-control @error('old_password') is-invalid @enderror"
                                               name="old_password" required>
                                        @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input id="password_confirmation" type="password"
                                               class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>

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
