@extends('layouts.user.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('Buy For Me') }}</div>
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
                    <h5 class="card-title">Product Information kkk</h5>
                    <form method="post" action="{{ route('user.BuyForMe.store') }}">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="name"class="">Product Name  <span style="color: red">*</span></label>
                            <input name="name" id="name" placeholder="T-Shirt or Xiaomi Note 9 Pro Max Phone" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="url" class="">Product URL  <span style="color: red">*</span></label>
                            <input name="url" id="url" placeholder="Ex: https://example.me/products/Xiaomi-Note9-ProMax.html" type="text" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="unit_price" class="">Price  <span style="color: red">*</span></label>
                                    <input name="unit_price" id="unit_price" placeholder="$2 USD or 170 BDT"  type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="unit_quantity" class="">Quantity  <span style="color: red">*</span></label>
                                    <input name="unit_quantity" id="unit_quantity" placeholder="Ex: 1" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="unit_color" class="">Product Color  <span style="color: red">*</span></label>
                                    <input name="unit_color" id="unit_color" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="unit_size" class="">Product Size  <span style="color: red">*</span></label>
                                    <input name="unit_size" id="unit_size" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="comment" class="">Comment</label>
                                    <input name="comment" id="comment" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <p style="color: red">* Marks Input Are  Required </p>
                        </div>
                        <button class="mt-2 btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
