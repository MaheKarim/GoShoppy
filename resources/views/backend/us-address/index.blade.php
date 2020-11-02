@extends('layouts.backend.app')

@push('cssUS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    @endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ribbon icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                   US Address Management
                </div>
            </div>
{{--            <div class="page-title-actions">--}}
{{--                <a href="{{ route('app.us-address.create') }}" class="btn-shadow mr-3 btn btn-primary">--}}
{{--                    <i class="fa fa-plus-square"></i>--}}
{{--                    Add US Store Address--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="tabs-animation">

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Our US Address
                    </div>
                    <div class="table-responsive">
                        <table
                         id="datatable"   class="align-middle mb-0 table table-borderless table-striped table-hover"
                        >
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">House Number</th>
                                <th class="text-center">Street Number</th>
                                <th class="text-center">State Name</th>
                                <th class="text-center">Postal Address</th>
                                <th class="text-center">Telephone Numbers</th>
                                <th class="text-center">Last Updated At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($usaddresses as $key=> $uSAddress)
                            <tr>
                                <td class="text-center text-muted">{{ $key+1 }}</td>
                                <td class="text-center">{{ $uSAddress->house_number }}</td>
                                <td class="text-center">{{ $uSAddress->street_number }}</td>
                                <td class="text-center">{{ $uSAddress->state_name }}</td>
                                <td class="text-center">{{ $uSAddress->postal_code }}</td>
                                <td class="text-center">{{ $uSAddress->telephone_number }}</td>
                                <td class="text-center">{{ $uSAddress->updated_at->diffForHumans() }}</td>

                                <td class="text-center">
                                    <a href="{{ route('app.us-address.edit', $uSAddress->id) }}"
                                        class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                    @if($uSAddress->deletable ==true)
                                        <button type="button" onclick="deleteData({{ $uSAddress->id }})"
                                                class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Delete</span>
                                        </button>
                                        <form id="delete-form-{{$uSAddress->id}}"
                                              action="{{ route('app.us-address.destroy', $uSAddress->id) }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                            @method('DELETE ')
                                        </form>
                                    @endif
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
