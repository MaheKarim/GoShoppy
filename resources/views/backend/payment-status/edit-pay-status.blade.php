@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Payment Service Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.payment-service.index') }}" class="btn-shadow mr-3 btn btn-danger">
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
                    <form action="{{  route('app.payment-service.update', $payments->id) }}"
                          method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h5 class="card-title">Payment Service</h5>
                            <div class="form-group">
                                <label for="pay_service_name">Payment Service Name</label>
                                <input id="pay_service_name" type="text" class="form-control @error('pay_service_name') is-invalid @enderror"
                                       name="pay_service_name" value="{{ $payments->pay_service_name }}" >
                                <input type="hidden" name="pay_service_id" value="{{ $payments->id }}">
                                @error('pay_service_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pay_service_account">Account NO / Name</label>
                                <input id="pay_service_account" type="text" class="form-control @error('pay_service_account') is-invalid @enderror"
                                       name="pay_service_account" value="{{ $payments->pay_service_account }}" >
                                @error('pay_service_account')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pay_service_type">Payment Service Type</label>
                                <input id="pay_service_type" type="text" class="form-control @error('pay_service_type') is-invalid @enderror"
                                       name="pay_service_type" value="{{ $payments->pay_service_type }}" >
                                @error('pay_service_type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-arrow-circle-up"></i>
                                Update
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
