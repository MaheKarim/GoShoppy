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
                            <th class="text-center">Products Name</th>
                            <th class="text-center">Receiver Name</th>
                            <th class="text-center">Receiver PHN</th>
                            <th class="text-center">Tracking ID</th>
                            <th class="text-center">Order Status</th>
                            <th class="text-center">Payable Money</th>
                            <th class="text-center">Payable Status</th>
                            <th class="text-center">Order Created</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shipformes as $key=> $shipforme)
                            <tr>
                                <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                <td class="text-center">{{ $shipforme->product_name }}</td>
                                <td class="text-center">{{ $shipforme->	recvr_name }}</td>
                                <td class="text-center">{{ $shipforme->	recvr_phn_number1 }}</td>
                                <td class="text-center">{{ $shipforme->	track_id }}</td>
                                <td class="text-center">{{ $shipforme->status->status }}</td>
                                <td class="text-center">{{ $shipforme->payble_money }}</td>
                                <td class="text-center">{{ $shipforme->comment }}</td>
                                <td class="text-center">{{ $shipforme->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('user.ShipForMe.show',$shipforme->id) }}"><i
                                            class="fas fa-eye"></i>
                                        <span>Show</span>
                                    </a>
                                </td>
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
