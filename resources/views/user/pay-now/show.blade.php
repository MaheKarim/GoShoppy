@extends('layouts.user.app')

@section('title','ShipForMe Order')

@push('css_new')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-ship icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('All Orders') }}</div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Products TrackID</th>
                            <th class="text-center">Payment Service</th>
                            <th class="text-center">Receiver PHN</th>
                            <th class="text-center">Tracking ID</th>
                            <th class="text-center">Order Status</th>
                            <th class="text-center">Order Created At</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $key=> $payment)
                            <tr>
                                <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                <td class="text-center">{{ $payment->payment_trackID }}</td>
                                <td class="text-center">{{ $payment->payment_name_id}}</td>
                                <td class="text-center">{{ $payment->payment_sender_acc }}</td>
                                <td class="text-center">{{ $payment->payment_sender_traxid }}</td>
                                <td class="text-center">{{ $payment->payment_status }}</td>

                                <td class="text-center">{{ $payment->created_at->diffForHumans() }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js_new')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Datatable
            $("#datatable").DataTable();
        });
    </script>
@endpush
