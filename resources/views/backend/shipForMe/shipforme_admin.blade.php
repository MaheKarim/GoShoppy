@extends('layouts.backend.app')

@section('title','All Orders')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('All ShipForMe Orders') }}</div>
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
                            <th class="text-center">Track ID</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Order Status</th>
                            <th class="text-center">Delivery Time</th>
                            <th class="text-center">Payable Money</th>
                            <th class="text-center">Payment Status</th>
                            <th class="text-center">Ordered At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $key=>$order)
                            <tr>
                                <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                <td>{{ $order->track_id }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $order->product_name }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="widget-subheading opacity-7">
                                        @if ($order->status->id == 1)
                                            <span class="badge badge-warning">{{ $order->status->status }}</span>
                                        @elseif ($order->status->id == 2)

                                            <span class="badge badge-danger">{{ $order->status->status }}</span>
                                        @else
                                            <span class="badge badge-primary">{{ $order->status->status }}</span>
                                        @endif
                                    </div>
                                </td>

                                <td class="text-center">{{ $order->delivery_time }}</td>
                                <td class="text-center">{{ $order->payble_money }}</td>
                                <td class="text-center">{{ $order->comment }}</td>
                                <td class="text-center">{{ $order->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('app.shipforme-orders.show', $order->id) }}"><i
                                            class="fas fa-eye"></i>
                                        <span>Show</span>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('app.shipforme-orders.edit',$order->id) }}"><i
                                            class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteData({{ $order->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                        <span>Delete</span>
                                    </button>
                                    <form id="delete-form-{{ $order->id }}"
                                          action="{{ route('app.shipforme-orders.destroy', $order->id) }}" method="POST"
                                          style="display: none;">
                                        @csrf()
                                        @method('DELETE')
                                    </form>
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

@push('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Datatable
            $("#datatable").DataTable();
        });
    </script>
@endpush
