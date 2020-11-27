@extends('layouts.user.app')

@section('content')

    <div class="col-lg-8">
        <div class="main-card mb-3 card">
                <!-- /.card-body -->
            <div class="card-header">Product Request Details </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                            <tbody>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ session('request.name') }}</td>
                            </tr>
                            <tr>
                                <th>Product URL</th>
                                <td>{{ session('request.url') }}</td>
                            </tr>
                            <tr>
                                <th>Product Size</th>
                                <td>{{ session('request.unit_size') }}</td>
                            </tr>

                            <tr>
                                <th>Product Quantity</th>
                                <td>{{ session('request.unit_quantity') }}</td>
                            </tr>
                            <tr>
                                <th>Product Color</th>
                                <td>{{ session('request.unit_color') }}</td>
                            </tr>
                            <tr>
                                <th>Product Prices</th>
                                <td>{{ session('request.unit_price') }}</td>
                            </tr>
                            <tr>
                                <th>Courier Charge</th>
                                <td>20</td>
                            </tr>
                            <tr>
                                <th>Total Charge</th>
                                <td>= {{ session('request.unit_price') * session('request.unit_quantity') + 20 }}</td>
                            </tr>
                            </tbody>
                        </table>
            </div>
            <br>
            <div id="paypal-button-container"></div>
            <br>
        </div>
    </div>

@endsection

@push('paypal')
    <script src="https://www.paypal.com/sdk/js?client-id=AeAGO9hsLu67mLnLzWCJPdcFod1l1aMHJtLT3I4VgOavdkdJ88P5fWibZIoPf1-81Kh-Fo5bsNZcqVxa_&currency=USD"></script>
    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            style: {
                layout: 'horizontal'
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ session('request.unit_price') * session('request.unit_quantity') + 20 }}'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }
        }).render('#paypal-button-container');
    </script>
    @endpush
