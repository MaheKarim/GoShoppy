@extends('layouts.user.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('Ship Details') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">

                    <a href="{{ route('user.dashboard.index') }}" class="btn-shadow btn btn-danger">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-arrow-circle-left fa-w-20"></i>
                        </span>
                        {{ __('Back to list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Grid Rows</h5>
                    <form class="">
                        <div class="position-relative form-group">
                            <label for="name"class="">Product Name</label>
                            <input name="name" id="name" placeholder="T-Shirt or Xiaomi Note 9 Pro Max Phone" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="url" class="">Product URL</label>
                            <input name="url" id="url" placeholder="Ex: https://mahekarim.me/products/Xiaomi-Note9-ProMax.html" type="text" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="unit_price" class=""> Price</label>
                                    <input name="unit_price" id="unit_price" placeholder="$2 USD or 170 BDT"  type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="unit_quantity" class="">Quantity</label>
                                    <input name="unit_quantity" id="unit_quantity" placeholder="Ex: 1" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleCity" class="">Color</label>
                                    <input name="city" id="exampleCity" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="exampleState" class="">Size</label>
                                    <input name="state" id="exampleState" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <label for="exampleZip" class="">Comment</label>
                                    <input name="zip" id="exampleZip" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <button class="mt-2 btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
