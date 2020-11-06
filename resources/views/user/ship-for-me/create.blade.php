@extends('layouts.user.app')

@push('wizard')
    <style>

        .form-section{
            padding-left: 15px;
            /*display: none;*/
        }
        .form-section.current{
            display: inherit;
        }
        .btn-info,  .btn-success{
            margin-top: 10px;
        }
        .parsley-errors-list{
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            color: red;
        }
    </style>
@endpush
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph icon-gradient bg-mean-fruit">
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
        <div class="col-md-3">
            <div class="main-card mb-3 card">
                <div class="card-border card card-body border-primary">
                    <h5 class="card-title">Our US Address</h5>
                    {{ $usaddresses->house_number }} <br>
                    {{ $usaddresses->street_number }} <br>
                    {{ $usaddresses->state_name }} <br>
                    {{ $usaddresses->postal_code }} <br>
                    {{ $usaddresses->telephone_number }}
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="container">
             <div class="card">
                 <div class="card-header text-white bg-info">
                     <h4>Ship For Me</h4>
                 </div>
                 <div class="card-body">
                     <form class="contact-form" method="POST" action="{{ route('user.ShipForMe.store') }}">
                         @csrf

                         <div class="form-section">
                             <label for="product_name">Product Name</label>
                             <input type="text" name="product_name" class="form-control" required>

                             <label for="product_link">Product Link</label>
                             <input type="text" name="product_link" class="form-control">

                             <label for="product_weight">Product Weight</label>
                             <input type="text" name="product_weight" class="form-control" required>

                             <label for="product_quantity">Product Quantity</label>
                             <input type="text" name="product_quantity" class="form-control" required>
                         </div>

                         <div class="form-section">
                             <label for="recvr_name">Receiver Name</label>
                             <input type="text" name="recvr_name" class="form-control" required>

                             <label for="recvr_phn_number1">Receiver Phone</label>
                             <input type="text" name="recvr_phn_number1" class="form-control" required>

                             <label for="recvr_phn_number2">Receiver Phone(Optional)</label>
                             <input type="text" name="recvr_phn_number2" class="form-control">

                             <label for="recvr_mail">Receiver Email</label>
                             <input type="text" name="recvr_mail" class="form-control">

                             <label for="recvr_address">Receiver House Address</label>
                             <textarea  name="recvr_address" class="form-control" required> </textarea>

                             <label for="recvr_upazila">Receiver Upazila</label>
                             <input type="text" name="recvr_upazila" class="form-control" required>

                             <label for="recvr_zila">Receiver Zila</label>
                             <input type="text" name="recvr_zila" class="form-control" required>
                         </div>

                         <div class="form-navigation">
                             <button type="button" class="previous btn btn-info float-left">Previous</button>
{{--                             <button type="button" class="next btn btn-info float-right">Next</button>--}}
                             <button type="submit" class="next btn btn-success float-right">Submit</button>
                         </div>
                     </form>
                 </div>
             </div>
            </div>
        </div>
    </div>

@endsection

{{--@push('wizard_js')--}}
{{--    <script>--}}
{{--        $(function(){--}}
{{--           var $sections = $('form-section');--}}

{{--           function navigateTo(index) {--}}
{{--               $sections.removeClass('current').eq(index).addClass('current');--}}
{{--               $('.form-navigation .previous').toggle(index>0);--}}
{{--               var atTheEnd = index >= $sections.length - 1;--}}
{{--               $('.form-navigation .next').toggle(!atTheEnd);--}}
{{--               $('.form-navigation [type=submit]').toggle(atTheEnd);--}}
{{--           }--}}

{{--           function curIndex() {--}}
{{--               return $sections.index($sections.filter('.current'));--}}
{{--           }--}}

{{--           $('.form-navigation .previous').click(function () {--}}
{{--               navigateTo(curIndex()-1);--}}
{{--           });--}}

{{--           $('.form-navigation .next').click(function () {--}}
{{--               $('.contact-form').parsley.whenValidate({--}}
{{--                   group: 'block-' + curIndex()--}}
{{--               }).done(function () {--}}
{{--                    navigateTo(curIndex()+1);--}}
{{--               })--}}
{{--            });--}}

{{--            $sections.each(function (index, section) {--}}
{{--                $(section).find(':input').attr('data-parsley-group', 'block'+index);--}}
{{--            });--}}
{{--            navigateTo(0);--}}
{{--        });--}}
{{--   </script>--}}
{{--@endpush--}}
