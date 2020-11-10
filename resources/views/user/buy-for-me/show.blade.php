@extends('layouts.user.app')

@section('content')

    <div class="col-lg-8">

            <div class="main-card mb-3 card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th>Product Name</th>
                            <td>{{ $request->name }}</td>
                        </tr>
                        <tr>
                            <th>Product prices</th>
                            <td>{{ $request->unit_price }}</td>
                        </tr>
                        <tr>
                            <th>Product Size</th>
                            <td>{{ $request->unit_size }}</td>
                        </tr>
                        <tr>
                            <th>Courier Charge</th>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th>Total Charge</th>
                            <td>{{ $request->unit_price + 20}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="mt-2 btn btn-primary" type="submit">Pay Now</button>
                </div>
                <!-- /.card-body -->
            </div>

    </div>

@endsection
