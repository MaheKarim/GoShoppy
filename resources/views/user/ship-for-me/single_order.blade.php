@extends('layouts.user.app')

@section('title','Order Details')

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

                    <a href="{{ route('user.ShipForMe.index') }}" class="btn-shadow btn btn-info">
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
        <div class="col-md-3">
            <div class="main-card mb-3 card">
                <div class="card-body">
               <b> Order Track ID:</b>
                  <h5>#{{ $shipForMe->track_id }} </h5>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-9">
            <div class="main-card card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th scope="row">Product Name:</th>
                            <td>{{ $shipForMe->product_name }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Product Link</th>
                            <td>{{ $shipForMe->product_link }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Product Weight</th>
                            <td>{{ $shipForMe->product_weight }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Product Quantity</th>
                            <td>{{ $shipForMe->product_quantity }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Receiver Name</th>
                            <td>{{ $shipForMe->recvr_name }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Receiver Contact Number 1</th>
                            <td>{{ $shipForMe->recvr_phn_number1 }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Contact Number 2</th>
                            <td>{{ $shipForMe->recvr_phn_number2 }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Mail</th>
                            <td>{{ $shipForMe->recvr_mail }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Address</th>
                            <td>{{ $shipForMe->recvr_address }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Upazila</th>
                            <td>{{ $shipForMe->recvr_upazila }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Receiver Zila</th>
                            <td>{{ $shipForMe->recvr_zila }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Payable Money</th>
                            <td>{{ $shipForMe->payble_money }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Payment Status</th>
                            @if($shipForMe->comment == NULL)
                            <td> - - - -  </td>
                            @else
                            <td>{{ $shipForMe->comment }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">Estimated Delivery Time</th>
                            @if($shipForMe->delivery_time == NULL)
                                <td> - - - -  </td>
                            @else
                                <td>{{ $shipForMe->delivery_time }}</td>
                            @endif
                        </tr>

                        <tr>
                            <th scope="row">Order Status</th>
                            <td>
                                @if ($shipForMe->status->id == 1)
                                    <div class="badge badge-danger">Order Pending Right Now!</div>
                                @else
                                    <div class="badge badge-success">Approve</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Order Created At:</th>
                            <td>{{ $shipForMe->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Order Updated At:</th>
                            <td>{{ $shipForMe->updated_at->diffForHumans() }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
