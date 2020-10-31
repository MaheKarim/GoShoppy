@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-check icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    {{ isset($user) ? 'Edit' : 'Create' }} Users Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.users.index') }}" class="btn-shadow mr-3 btn btn-danger">
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
                <form action="{{ isset($user) ? route('app.users.update', $user->id) : route('app.users.store') }}" method="post">
                    @csrf
                    @isset($user)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-3 card">

                                <div class="card-body">
                                    <h5 class="card-title">User Basic Info</h5>
                                    <div class="form-group">
                                        <label for="name">User Name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ $user->name ??  old('name') }}" required autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ $user->email ??  old('email') }}" required >

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="text" class="form-control @error('password') is-invalid @enderror"
                                               name="password"  required >

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input id="confirm_password" type="text" class="form-control @error('password') is-invalid @enderror"
                                               name="password_confirmation"  required >

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- Div Name End -->
                                </div>
                            </div>
                                <div class="col-md-4"></div>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script type="text/javascript">
        // Listen for click on toggle checkbox
        $('#select-all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }
        });
    </script>
@endpush
