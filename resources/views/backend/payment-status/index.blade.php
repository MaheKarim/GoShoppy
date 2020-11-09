@extends('layouts.backend.app')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

@endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Payments Status Management
                </div>
            </div>
        </div>
    </div>

    <div class="tabs-animation">

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="table-responsive">
                        <table
                            id="datatable"   class="align-middle mb-0 table table-borderless table-striped table-hover"
                        >
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Sender User</th>
                                <th class="text-center">Product TrackID</th>
                                <th class="text-center">Sender Account NO</th>
                                <th class="text-center">Payment Service Type</th>
                                <th class="text-center">Sent Money</th>
                                <th class="text-center">Sender TraXID</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($payments as $key => $payment)
                                <tr>
                                    <td class="text-center text-muted">{{ $key+1 }}</td>
                                    <td class="text-center">{{ $payment->User->name }} </td>
                                    <td class="text-center">{{ $payment->payment_trackID }} </td>
                                    <td class="text-center">{{ $payment->payment_sender_acc }}</td>
                                    <td class="text-center">{{ $payment->service->pay_service_name }}</td>
                                    <td class="text-center">{{ $payment->payment_sender_money }}</td>
                                    <td class="text-center">{{ $payment->payment_sender_traxid }}</td>
                                    <td class="text-center">{{ $payment->status->status }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('app.payment-receive.edit', $payment->id) }}"
                                           class="btn btn-info btn-sm">
                                            <i class="fas fa-edit"></i>
                                            <span>Edit</span>
                                        </a>
                                        <button type="button" onclick="deleteData({{ $payment->id }})"
                                                class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Delete</span>
                                        </button>
                                        <form id="delete-form-{{ $payment->id }}"
                                              action="{{ route('app.payment-receive.destroy', $payment->id) }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                            @method('DELETE ')
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

    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
@endpush
