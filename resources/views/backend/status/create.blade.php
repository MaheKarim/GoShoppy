@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-gleam icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    {{ isset($statuses) ? 'Edit' : 'Create' }} Status Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.status.index') }}" class="btn-shadow mr-3 btn btn-danger">
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
                    <form action="{{ route('app.status.store') }}" method="post">
                        @csrf

                        <div class="card-body">
                            <h5 class="card-title">Status Information</h5>
                            <div class="form-group">
                                <label for="status">Status Name</label>
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror"
                                       name="status" required autofocus>

                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="status_description">Status Description</label>
                                <input id="status_description" type="text" class="form-control @error('status_description') is-invalid @enderror"
                                       name="status_description">

                                @error('status_description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Div Name End -->

                            <button type="submit" class="btn btn-primary">
                                @isset($statuses)
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
