@extends('layouts.user.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-ship icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('BuyForMe Payments Sheet') }}</div>
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
                            <th class="text-center">Products URL</th>
                            <th class="text-center">Unit Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Color</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Order Status</th>
                            <th class="text-center">Order Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buyorders as $key=> $buyorder)
                            <tr>
                                <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                <td class="text-center">{{ $buyorder->name }}</td>
                                <td class="text-center">{{ $buyorder->url}}</td>
                                <td class="text-center">{{ $buyorder->unit_price }}</td>
                                <td class="text-center">{{ $buyorder->unit_quantity }}</td>
                                <td class="text-center">{{ $buyorder->unit_color }}</td>
                                <td class="text-center">{{ $buyorder->unit_size }}</td>
                                <td class="text-center">{{ $buyorder->status->status }}</td>
                                <td class="text-center">{{ $buyorder->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
