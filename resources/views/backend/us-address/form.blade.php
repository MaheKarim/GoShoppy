@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ribbon icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    {{ isset($usaddresses) ? 'Edit' : 'Create' }} US Address Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.us-address.index') }}" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fa fa-arrow-circle-left"></i>
                    Back To List
                </a>

            </div>
        </div>
    </div>

    <div class="tabs-animation">

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <form action="{{ route('app.us-address.update', $usaddresses->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h5 class="card-title">US  Address</h5>
                            <div class="form-group">
                                <label for="house_number">House Number</label>
                                <input id="house_number" type="text" class="form-control @error('house_number') is-invalid @enderror"
                                       name="house_number" value="{{ $usaddresses->house_number ??  old('house_number') }}" required autofocus>
                                <input type="hidden" name="house_number_id"  value="{{ $usaddresses->id }}">

                                @error('house_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="street_number">Street Number</label>
                                <input id="street_number" type="text" class="form-control @error('street_number') is-invalid @enderror"
                                       name="street_number" value="{{ $usaddresses->street_number ??  old('street_number') }}" required autofocus>

                                @error('street_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="state_name">State Name</label>
                                <input id="state_name" type="text" class="form-control @error('state_name') is-invalid @enderror"
                                       name="state_name" value="{{ $usaddresses->state_name ??  old('state_name') }}" required autofocus>

                                @error('state_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="postal_code">Postal Code</label>
                                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror"
                                       name="postal_code" value="{{ $usaddresses->postal_code ??  old('postal_code') }}" required autofocus>

                                @error('postal_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="telephone_number">Telephone Number</label>
                                <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror"
                                       name="telephone_number" value="{{ $usaddresses->telephone_number ??  old('telephone_number') }}" required autofocus>

                                @error('telephone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Div Name End -->


                            <button type="submit" class="btn btn-primary">
                                @isset($usaddresses)
                                    <i class="fas fa-arrow-circle-up"></i>
                                    Update
                                @else
                                    <i class="fas fa-plus-circle"></i>
                                    Create
                                @endisset
                            </button>
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
