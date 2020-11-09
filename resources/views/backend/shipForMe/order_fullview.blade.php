@extends('layouts.backend.app')

@section('title','ShipForMe - Order Details')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('Order Details') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">

                    <a href="{{ route('app.shipforme-orders.index') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-arrow-circle-left fa-w-20"></i>
                        </span>
                        {{ __('Back to list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    <button class="mb-0 btn btn-primary">
                        <i class="pe-7s-tools btn-icon-wrapper"></i>
                        Admin Section Only</button>
                    <div class="btn-actions-pane-right">

                    </div>
                </div>
                <div class="table-responsive">
                    <table
                        class="align-middle mb-0 table table-borderless table-striped table-hover"
                    >
                        <thead>
                        <tr>
                            <th class="text-center">TrackID</th>
                            <th class="text-center">Payment Status</th>
                            <th class="text-center">Payable Money</th>
                            <th class="text-center">Delivery Date</th>
                            <th class="text-center">Order Status</th>
                            <th class="text-center">Order Last Updated</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="text-center text-muted">{{ $order->track_id }}</td>
                            <td class="text-center text-muted">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">
                                               {{ $order->comment }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{ $order->payble_money }}</td>
                            <td class="text-center">{{ $order->delivery_time }}</td>


                            <td class="text-center">
                                @if ($order->status->id == 1)
                                    <div class="badge badge-danger"> {{ $order->status->status }}</div>
                                @else
                                    <div class="badge badge-success"> {{ $order->status->status }}</div>
                                @endif
                            </td>


                            <td class="text-center" >
                               {{ $order->updated_at->diffForHumans() }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('app.shipforme-orders.edit', $order->id) }}"
                                    type="button"
                                    id="PopoverCustomT-2"
                                    class="btn btn-primary btn-sm">
                                    Update
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-card mb-3 card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th>Order Created</th>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Sender Name</th>
                            <td>{{ $order->User->name }}</td>
                        </tr>
                        <tr>
                            <th>Sender PHN NO</th>
                            <td>{{ $order->User->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Sender Email</th>
                            <td>{{ $order->User->email }}</td>
                        </tr>
                        <tr>
                            <th>Sender State Name</th>
                            <td>{{ $order->User->state_name }}</td>
                        </tr>
                        <tr>
                            <th>Sender Country</th>
                            <td>{{ $order->User->current_country }}</td>
                        </tr>
                        <tr>
                            <th>Sender Balance</th>
                            <td>{{ $order->User->deposit_balance }} BDT </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-8">
            <div class="main-card card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th scope="row">Product Name:</th>
                            <td>{{ $order->product_name }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Product Link</th>
                            <td>{{ $order->product_link }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Product Weight</th>
                            <td>{{ $order->product_weight }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Product Quantity</th>
                            <td>{{ $order->product_quantity }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Receiver Name</th>
                            <td>{{ $order->recvr_name }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Receiver Contact Number 1</th>
                            <td>{{ $order->recvr_phn_number1 }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Contact Number 2</th>
                            <td>{{ $order->recvr_phn_number2 }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Mail</th>
                            <td>{{ $order->recvr_mail }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Address</th>
                            <td>{{ $order->recvr_address }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Upazila</th>
                            <td>{{ $order->recvr_upazila }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Zila</th>
                            <td>{{ $order->recvr_zila }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
