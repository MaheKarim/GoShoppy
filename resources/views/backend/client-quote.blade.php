@extends('layouts.backend.app')

@push('cssUS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

@endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-right-arrow icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    Client Quotes
                </div>
            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Courier Service Type
                    </div>
                    <div class="table-responsive">
                        <table
                            id="datatable"   class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">Client Email/PHN</th>
                                <th class="text-center">Client Service</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($getquotes as $key=> $getquote)
                                <tr>
                                    <td class="text-center text-muted">{{ $key+1 }}</td>
                                    <td class="text-center">{{ $getquote->client_name }}</td>
                                    <td class="text-center">{{ $getquote->client_contact }}</td>
                                    <td class="text-center">{{ $getquote->courier->courier_type_name }}</td>
                                    <td class="text-center">{{ $getquote->created_at->diffForHumans() }}</td>

                                    <td class="text-center">
                                            <button type="button" onclick="deleteData({{ $getquote->id }})"
                                                    class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                                <span>Delete</span>
                                            </button>
                                            <form id="delete-form-{{ $getquote->id }}"
                                                  action="{{ route('app.client-quote.destroy', $getquote->id) }}" method="POST"
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

@push('jsUS')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
@endpush
