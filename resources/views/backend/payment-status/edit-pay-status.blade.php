@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Payment Receive Status Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.payment-receive.index') }}" class="btn-shadow mr-3 btn btn-danger">
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
                    <form action="{{  route('app.payment-receive.update', $payments->id) }}"
                          method="post">
                        @csrf
                         @method('PUT')
                        <div class="card-body">
                            <h5 class="card-title">Payment Status Change</h5>
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $payments->id }}">
                                <label>Update Payment Status</label>
                                <select name="status_id" class="form-control select">
                                    @php($statuss= \App\Models\Status::all())
                                    @foreach ($statuss as $status)
                                        <option  {{ ($payments->status_id == $status->id) ? 'selected' : '' }} value="{{ $status->id }}">{{$status->status}}</option>
                                    @endforeach
                                </select>
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
