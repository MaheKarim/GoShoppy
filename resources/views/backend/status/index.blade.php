@extends('layouts.backend.app')

@push('cssUS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    @endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-gleam icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                   Status Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.status.create') }}" class="btn-shadow mr-3 btn btn-primary">
                    <i class="fa fa-plus-square"></i>
                    Add Status
                </a>
            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Status
                    </div>
                    <div class="table-responsive">
                        <table
                         id="datatable"   class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Status Name</th>
                                <th class="text-center">Status Description</th>
                                <th class="text-center">Status Updated</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($statuses as $key=> $status)
                            <tr>
                                <td class="text-center text-muted">{{ $key+1 }}</td>
                                <td class="text-center">{{ $status->status }}</td>
                                <td class="text-center">{{ $status->status_description }}</td>
                               <td class="text-center">{{ $status->updated_at->diffForHumans() }}</td>

                                <td class="text-center">
                                    <a href="{{ route('app.status.edit', $status->id) }}"
                                        class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                    @if($status->deletable ==true)
                                        <button type="button" onclick="deleteData({{ $status->id }})"
                                                class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Delete</span>
                                        </button>
                                        <form id="delete-form-{{$status->id}}"
                                              action="{{ route('app.status.destroy', $status->id) }}" method="POST"
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
