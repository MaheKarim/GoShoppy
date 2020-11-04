@extends('layouts.backend.app')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    @endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-comment icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    FAQ's Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.faq-system.create') }}" class="btn-shadow mr-3 btn btn-primary">
                    <i class="fa fa-plus-square"></i>
                    Add FAQ
                </a>

            </div>
        </div>
    </div>

    <div class="tabs-animation">

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Active Users
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-secondary">
                                   Latest User
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table
                         id="datatable"   class="align-middle mb-0 table table-borderless table-striped table-hover"
                        >
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">FAQ Question</th>
                                <th class="text-center">FAQ Answer</th>
                                <th class="text-center">Updated At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($faqs as $key => $faq)
                            <tr>
                                <td class="text-center text-muted">{{ $key+1 }}</td>
                                <td class="text-center">{{ $faq->faq_ques }} </td>
                                <td class="text-center">

                                     {{ $faq->faq_ans }}

                                </td>
                                <td class="text-center">{{ $faq->updated_at->diffForHumans() }}</td>

                                <td class="text-center">
                                    <a href="{{ route('app.faq-system.edit', $faq->id) }}"
                                        class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                        <button type="button" onclick="deleteData({{ $faq->id }})"
                                                class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Delete</span>
                                        </button>
                                        <form id="delete-form-{{$faq->id}}"
                                              action="{{ route('app.faq-system.destroy', $faq->id) }}" method="POST"
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
