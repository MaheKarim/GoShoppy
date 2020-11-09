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
<div class="breadcroumb-area bread-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>Register</h1>
                    <h6><a href="{{ url('/') }}">Home</a> / Register</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- top-nav bar end-->
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <!-- Extra Field -->
                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}"
                                       required autocomplete="phone_number" autofocus placeholder="Please Put Dial Code. Ex: +880">

                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state_name" class="col-md-4 col-form-label text-md-right">{{ __('State / District Name') }}</label>

                            <div class="col-md-6">
                                <input id="state_name" type="text" class="form-control @error('state_name') is-invalid @enderror" name="state_name" value="{{ old('state_name') }}"
                                       required autocomplete="state_name" autofocus >

                                @error('state_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="current_country" class="col-md-4 col-form-label text-md-right">{{ __('Current Living Country Name') }}</label>

                            <div class="col-md-6">
                                <input id="current_country" type="text" class="form-control @error('current_country') is-invalid @enderror" name="current_country" value="{{ old('current_country') }}"
                                       required autocomplete="current_country" autofocus >

                                @error('current_country')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<br> <hr>

<!-- footer end-->
@include('frontend.partials.footer')
<!-- Scroll Top Area -->
@include('frontend.partials.frontendJS')

</body>
</html>

