@extends('layouts.backend.app')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

@endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cash icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Payments Service Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.payment-service.create') }}" class="btn-shadow mr-3 btn btn-primary">
                    <i class="fa fa-plus-square"></i>
                    Add Payment Service
                </a>

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
                                <th class="text-center">Payment Service Name</th>
                                <th class="text-center">Account NO</th>
                                <th class="text-center">Payment Service Type</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($payments as $key => $payment)
                                <tr>
                                    <td class="text-center text-muted">{{ $key+1 }}</td>
                                    <td class="text-center">{{ $payment->pay_service_name }} </td>
                                    <td class="text-center">{{ $payment->pay_service_account }}
                                    </td>
                                    <td class="text-center">{{ $payment->pay_service_type }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('app.payment-service.edit', $payment->id) }}"
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
                                              action="{{ route('app.payment-service.destroy', $payment->id) }}" method="POST"
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
