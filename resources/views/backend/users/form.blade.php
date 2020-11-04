@extends('layouts.backend.app')

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
                <form action="{{ isset($user) ? route('app.users.update', $user->id) : route('app.users.store') }}"
                      method="post" enctype="multipart/form-data">
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
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ $user->name ??  old('name') }}" required autofocus>

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
                                               name="email" value="{{ $user->email ??  old('email') }}" required>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone_number">Contact Number</label>
                                        <input id="phone_number" type="text"
                                               class="form-control @error('phone_number') is-invalid @enderror"
                                               name="phone_number" value="{{ $user->phone_number ??  old('phone_number') }}" required>

                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="state_name">State Name</label>
                                        <input id="state_name" type="text"
                                               class="form-control @error('state_name') is-invalid @enderror"
                                               name="state_name" value="{{ $user->state_name ??  old('state_name') }}" required>

                                        @error('state_name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="current_country">Country Name</label>
                                        <input id="current_country" type="text"
                                               class="form-control @error('current_country') is-invalid @enderror"
                                               name="current_country" value="{{ $user->current_country ??  old('current_country') }}" required>

                                        @error('current_country')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="deposit_balance">Deposit Balance</label>
                                        <input id="deposit_balance" type="text"
                                               class="form-control @error('deposit_balance') is-invalid @enderror"
                                               name="deposit_balance" value="{{ $user->deposit_balance ??  old('deposit_balance') }}">

                                        @error('deposit_balance')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" {{ !isset($user) ? 'required' : '' }}>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input id="confirm_password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password_confirmation" {{ !isset($user) ? 'required' : '' }}>

                                        @error('password')
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
                                    <h5 class="card-title">Select Role & Status</h5>

                                    <div class="form-group">
                                        <label for="role">Select Role</label>

                                        <select id="role"
                                                class="js-example-basic-single form-control @error('role') is-invalid @enderror"
                                                name="role" >
                                            @foreach($roles as $key=> $role)
                                                <option value="{{ $role->id }}"
                                                @isset($user) {{ $user->role->id == $role->id ? 'selected' : '' }}
                                                    @endisset
                                                >{{ $role->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('role')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Profile Image Start -->
                                    <div class="form-group">
                                        <label for="avatar">Avatar</label>

                                        <input type="file" id="avatar"
                                                class="dropify form-control @error('avatar') is-invalid @enderror"
                                                name="avatar" data-default-file="{{ isset($user) ? $user->getFirstMediaUrl('avatar') : '' }}" {{ !isset($user) ? 'required' : '' }}>
                                        @error('avatar')
                                        <span class="text-danger" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Profile Image End -->
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($user) {{ $user->status == true ? 'checked' : '' }} @endisset>
                                            <label class="custom-control-label" for="status">Status</label>

                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        @isset($user)
                                            <i class="fas fa-arrow-circle-up"></i>
                                            Update
                                        @else
                                            <i class="fas fa-plus-circle"></i>
                                            Create
                                        @endisset
                                    </button>
                                </div>
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
