@extends('layouts.user.app')


@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-home icon-gradient bg-ripe-malin"></i>
                </div>
                <div>User Dashboard
                    <div class="page-title-subheading">This dashboard was created as an example of the
                        flexibility that Architect offers.
                    </div>
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
                                    <button class="btn btn-success">View Profile</button>
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
                                                     <i class=" lnr-smartphone icon-gradient bg-mixed-hopes">  {{ $item->telephone_number }}</i>
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
                                            <button
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                <i class="lnr-lighter text-dark opacity-0 btn-icon-wrapper mb-2"></i>
                                                Buy For Me
                                            </button>
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
                                            <a
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"></i>
                                                Deposit
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <button
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>FAQ
                                            </button>
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
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Product / Country / Receiver List
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-focus">Last Week</button>
                                <button class="btn btn-focus">All Month</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th class="text-center">City</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Sales</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center text-muted">#345</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle"
                                                         src="assets/images/avatars/4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">John Doe</div>
                                                <div class="widget-subheading opacity-7">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Madrid</td>
                                <td class="text-center">
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                                <td class="text-center" style="width: 150px;">
                                    <div class="pie-sparkline">2,4,6,9,4</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1"
                                            class="btn btn-primary btn-sm">Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">#347</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle"
                                                         src="assets/images/avatars/3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">Ruben Tillman</div>
                                                <div class="widget-subheading opacity-7">Etiam sit amet orci
                                                    eget
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Berlin</td>
                                <td class="text-center">
                                    <div class="badge badge-success">Completed</div>
                                </td>
                                <td class="text-center" style="width: 150px;">
                                    <div id="sparkline-chart4"></div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-2"
                                            class="btn btn-primary btn-sm">Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">#321</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle"
                                                         src="assets/images/avatars/2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">Elliot Huber</div>
                                                <div class="widget-subheading opacity-7">Lorem ipsum dolor
                                                    sic
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">London</td>
                                <td class="text-center">
                                    <div class="badge badge-danger">In Progress</div>
                                </td>
                                <td class="text-center" style="width: 150px;">
                                    <div id="sparkline-chart8"></div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-3"
                                            class="btn btn-primary btn-sm">Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted">#55</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle"
                                                         src="assets/images/avatars/1.jpg" alt=""></div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                <div class="widget-subheading opacity-7">UI Designer</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Amsterdam</td>
                                <td class="text-center">
                                    <div class="badge badge-info">On Hold</div>
                                </td>
                                <td class="text-center" style="width: 150px;">
                                    <div id="sparkline-chart9"></div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-4"
                                            class="btn btn-primary btn-sm">Details
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                            <i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                        <button class="btn-wide btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
