@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ribbon icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    {{ isset($orders) ? 'Edit' : 'Create' }} Order ID  ✅  #{{ $orders->track_id }}
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.shipforme-orders.index') }}" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fa fa-arrow-circle-left"></i>
                    Back To Order List
                </a>
            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <form action="{{ route('app.shipforme-orders.update', $orders->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <h5 class="card-title">Admin Order Update</h5>
                            <div class="form-group">
                                <label for="comment">Update Payment Status</label>
                                <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror"
                                       name="comment" value="{{ $orders->comment ??  old('comment') }}" required placeholder="Ex: Incomplete" autofocus>
                                <input type="hidden" name="comment_id"  value="{{ $orders->id }}">
                                @error('comment')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="payble_money">Payable Money</label>
                                <input id="payble_money" type="text" class="form-control @error('payble_money') is-invalid @enderror"
                                       name="payble_money" value="{{ $orders->payble_money ??  old('payble_money') }}" placeholder="EX: 120 BDT or $2 USD" required autofocus>
                                @error('payble_money')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="delivery_time">Estimated Delivery Date</label>
                                <input id="delivery_time" type="text" class="form-control @error('delivery_time') is-invalid @enderror"
                                       name="delivery_time" value="{{ $orders->delivery_time ??  old('delivery_time') }}" required autofocus>
                                @error('delivery_time')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Update Order Status</label>
                                <select name="status_id" class="form-control select">
                                    @php($statuss= \App\Models\Status::all())
                                    @foreach ($statuss as $status)
                                        <option  {{ ($orders->status_id == $status->id) ? 'selected' : '' }} value="{{ $status->id }}">{{$status->status}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Div Name End -->


                            <button type="submit" class="btn btn-primary">
                                @isset($orders)
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
