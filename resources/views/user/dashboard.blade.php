@extends('layouts.user.app')


@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-home icon-gradient bg-ripe-malin"></i>
                </div>
                <div>User Dashboard
                </div>
            </div>
        </div>
    </div>
    <!-- Notification Start Here -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy {{ Auth::user()->name }}!</strong> {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- Notification End Here -->
    <div class="tabs-animation">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="mb-3 profile-responsive card">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-arielle-smile">
                            <div class="menu-header-image opacity-1"
                                 style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                            <div class="menu-header-content btn-pane-right">
                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                    <div class="avatar-icon rounded">
                                        <img src="{{ Auth::user()->getFirstMediaUrl('avatar') }}" alt="Avatar 5"></div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title">{{ Auth::user()->name }}</h5>
                                    <h6 class="menu-header-subtitle">You're our , {{ Auth::user()->role->slug }}</h6>
                                </div>
                                <div class="menu-header-btn-pane">
                                    <a href="{{ route('user.profileIndex') }}" class="btn btn-success">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">

                            <div class="main-card  card">
                                <div class="card-header">
                                    <i class="header-icon lnr-gift icon-gradient bg-mixed-hopes"> </i>
                                    Our US Store Address
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-eg3-0" role="tabpanel">
                                            @foreach($usaaddress as $item)
                                                 <h5 align="center">
                                                     <td>{{ $item->house_number }},</td> <br>
                                                     <td>{{ $item->street_number }},</td> <br>
                                                     <td> {{ $item->state_name }}, {{ $item->postal_code }},</td> <br>
                                                     TEL: {{ $item->telephone_number }}
                                                 </h5>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <li class="p-0 list-group-item">
                            <div class="grid-menu grid-menu-2col">
                                <div class="no-gutters row">
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <a href="{{ url('user/BuyForMe/create') }}"
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                <i class="lnr-lighter text-dark opacity-0 btn-icon-wrapper mb-2"></i>
                                                Buy For Me
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <a href="{{ route('user.ShipForMe.create') }}"
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"></i>
                                                Ship For Me
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <a href="{{ route('user.pay-now.create') }}" target="_blank"
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                <i class="lnr-thumbs-up text-success opacity-7 btn-icon-wrapper mb-2"></i>
                                                Pay Now
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <a href="{{ url('/faq') }}"
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>FAQ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <div role="group" class="mb-3 btn-group-lg btn-group">
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-primary">Primary</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-secondary">Secondary</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-success">Success</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-info">Info</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-warning">Warning</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-danger">Danger</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-focus">Focus</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-alternate">Alt</div>
                    <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-dark">Dark</div>
            </div>
        </div>
       <!-- row div -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="pb-3 card-title">Payment Option</h5>
                        <div class="row">
                            @foreach($payments as $payment)
                            <div class="col-md-3">
                                <div class="dropdown-menu-header">
                                   @if($payment->id == 1 )
                                    <div class="dropdown-menu-header-inner bg-primary">
                                        <div class="menu-header-image" style="background-image: url('/assets/images/dropdown-header/abstract1.jpg');">
                                        </div>
                                        <div class="menu-header-content">
                                            <h5 class="menu-header-title">{{ $payment->pay_service_name }}</h5>
                                            <h6 class="menu-header-subtitle">Pay Your Bill To Our {{ $payment->pay_service_name }} Service</h6>
                                        </div>
                                    </div>
                                    @elseif ($payment->id == 2)
                                    <div class="dropdown-menu-header-inner bg-danger">
                                        <div class="menu-header-image opacity-2" style="background-image: url('/assets/images/dropdown-header/abstract2.jpg');"></div>
                                        <div class="menu-header-content">
                                            <h5 class="menu-header-title">{{ $payment->pay_service_name }}</h5>
                                            <h6 class="menu-header-subtitle">Pay Your Bill To Our {{ $payment->pay_service_name }} Service</h6>
                                        </div>
                                    </div>
                                    @elseif ($payment->id == 3)
                                    <div class="dropdown-menu-header-inner bg-success">
                                        <div class="menu-header-image opacity-1" style="background-image: url('/assets/images/dropdown-header/abstract3.jpg');"></div>
                                        <div class="menu-header-content">
                                            <h5 class="menu-header-title">{{ $payment->pay_service_name }}</h5>
                                            <h6 class="menu-header-subtitle">Pay Your Bill To Our {{ $payment->pay_service_name }} Service</h6>
                                        </div>
                                    </div>
                                     @elseif ($payment->id == 4)
                                    <div class="dropdown-menu-header-inner bg-dark">
                                        <div class="menu-header-image opacity-1" style="background-image: url('/assets/images/dropdown-header/abstract3.jpg');"></div>
                                        <div class="menu-header-content">
                                            <h5 class="menu-header-title">{{ $payment->pay_service_name }}</h5>
                                            <h6 class="menu-header-subtitle">Pay Your Bill To Our {{ $payment->pay_service_name }} Service</h6>
                                        </div>
                                    </div>

                                    @endif
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-header nav-item">Account NO / Name</li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon pe-7s-chat"> </i><span>{{ $payment->pay_service_account }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item-header nav-item"> Account Type</li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon pe-7s-config"></i><span>{{ $payment->pay_service_type }}</span>
                                            <div class="ml-auto badge badge-success">New</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
        </div>
       <!-- row div -->
    </div>

@endsection
