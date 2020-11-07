@extends('layouts.backend.app')


@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-helm icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Password Update
                </div>
            </div>

        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-12">
                <!-- Form Start -->
                <form action="{{ route('app.password.update') }}" method="POST">
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

