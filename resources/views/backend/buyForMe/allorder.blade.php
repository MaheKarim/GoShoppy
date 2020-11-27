@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-plane icon-gradient bg-mean-fruit">
                    </i>
                </div>
                 <div>{{ __('All BuyForMe Orders') }}</div>
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
                            <th class="text-center">P. Name</th>
                            <th class="text-center">P. URL</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Color</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Ordered At</th>
                            <th class="text-center">Order Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bfmorders as $key=>$bfmorder)
                            <tr>
                                <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                <td>{{ $bfmorder->name }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $bfmorder->url }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $bfmorder->unit_price }}</td>
                                <td class="text-center">{{ $bfmorder->unit_quantity }}</td>
                                <td class="text-center">{{ $bfmorder->unit_color }}</td>
                                <td class="text-center">{{ $bfmorder->unit_size }}</td>
                                <td>
                                    <div class="widget-subheading opacity-7">
                                        @if ($bfmorder->status->id == 1)
                                            <span class="badge badge-warning">{{ $bfmorder->status->status }}</span>
                                        @elseif ($bfmorder->status->id == 2)

                                            <span class="badge badge-danger">{{ $bfmorder->status->status }}</span>
                                        @else
                                            <span class="badge badge-primary">{{ $bfmorder->status->status }}</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center">{{ $bfmorder->created_at->diffForHumans() }}</td>
                                <td class="text-center">
{{--                                    <a class="btn btn-secondary btn-sm" href="{{ route('app.shipforme-orders.show', $bfmorder->id) }}"><i--}}
{{--                                            class="fas fa-eye"></i>--}}
{{--                                        <span>Show</span>--}}
{{--                                    </a>--}}
                                    <a class="btn btn-info btn-sm" href="{{ route('app.buyforme-orders.edit',$bfmorder->id) }}"><i
                                            class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteData({{ $bfmorder->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                        <span>Delete</span>
                                    </button>
                                    <form id="delete-form-{{ $bfmorder->id }}"
                                          action="{{ route('app.buyforme-orders.destroy', $bfmorder->id) }}" method="POST"
                                          style="display: none;">
                                        @csrf()
                                        @method('DELETE')
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
@endsection
