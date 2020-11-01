@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-check icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    {{ isset($role) ? 'Edit' : 'Create' }} Roles Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.roles.index') }}" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fa fa-arrow-circle-left"></i>
                    Back To List
                </a>

            </div>
        </div>
    </div>

    <div class="tabs-animation">

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <form action="{{ isset($role) ? route('app.roles.update', $role->id) : route('app.roles.store') }}"
                          method="post">
                        @csrf
                        @isset($role)
                            @method('PUT')
                        @endisset
                        <div class="card-body">
                            <h5 class="card-title">Role Title</h5>
                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ $role->name ??  old('name') }}" required autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Div Name End -->

                            <div class="text-center">
                                <strong>Manage Role Permissions</strong>
                                <p class="p-2">
                                    @error('permissions')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="select-all">
                                    <label class="custom-control-label" for="select-all">Select All</label>
                                </div>
                            </div>

                            @forelse($modules->chunk(2) as $key=>$chunks)
                                <div class="form-row">
                                    @foreach($chunks as $key=>$module)
                                        <div class="col">
                                            <h5>Module: {{ $module->name }}</h5>
                                            @foreach($module->permissions as $key=>$permission)
                                                <div class="mb-3 ml-4">
                                                    <div class="custom-control custom-checkbox mb-2">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="permission-{{ $permission->id }}"
                                                               name="permissions[]"
                                                               value="{{ $permission->id }}" @isset($role)
                                                            @foreach ($role->permissions as $rPermission)
                                                                {{ $permission->id == $rPermission->id ? 'checked' : '' }}
                                                                @endforeach                                                                                            @endisset
                                                        >
                                                        <label for="permission-{{ $permission->id }}"
                                                               class="custom-control-label">{{ $permission->name }}</label>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            @empty
                                <div class="row">
                                    <div class="col text-center">
                                        <strong>No Module Found.</strong>
                                    </div>
                                </div>
                            @endforelse
                            <button type="submit" class="btn btn-primary">
                                @isset($role)
                                    <i class="fas fa-arrow-circle-up"></i>
                                    Update
                            @else
                                <i class="fas fa-plus-circle"></i>
                                Create
                            @endisset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script type="text/javascript">
        // Listen for click on toggle checkbox
        $('#select-all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }
        });
    </script>
@endpush
