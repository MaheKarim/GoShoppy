@extends('layouts.user.app')

@section('content')

    <div class="col-lg-8">
        <div class="main-card mb-3 card">
                <!-- /.card-body -->
            <div class="card-header">Product Request Details</div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                            <tbody>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $request->name }}</td>
                            </tr>
                            <tr>
                                <th>Product URL</th>
                                <td>{{ $request->url }}</td>
                            </tr>
                            <tr>
                                <th>Product Size</th>
                                <td>{{ $request->unit_size }}</td>
                            </tr>

                            <tr>
                                <th>Product Quantity</th>
                                <td>{{ $request->unit_quantity }}</td>
                            </tr>
                            <tr>
                                <th>Product Color</th>
                                <td>{{ $request->unit_color }}</td>
                            </tr>
                            <tr>
                                <th>Product Prices</th>
                                <td>{{ $request->unit_price }}</td>
                            </tr>
                            <tr>
                                <th>Courier Charge</th>
                                <td>20</td>
                            </tr>
                            <tr>
                                <th>Total Charge</th>
                                <td>= {{ $request->unit_price + 20}}</td>
                            </tr>
                            </tbody>
                        </table>
            </div>
            <br>
                <div class="col-lg-10">
                    <a href="{{ url('user/BuyForMe/create') }}" class="mt-2 btn btn-primary" type="submit">Pay Now</a>
                </div>
            <br>
        </div>
    </div>

@endsection
