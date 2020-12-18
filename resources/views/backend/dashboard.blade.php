@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-rocket icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    @role('admin')
                    Admin Dashboard ( Hi, {{ Auth::user()->name }}  )
                    @else
                        Dashboard
                    @endrole
                    <div class="page-title-subheading">
                       You are rockstar for this system
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-night-fade">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total ShipForMe Orders</div>
                            <div class="widget-subheading">Only Approved Order</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white">
                                <span>{{ \App\Models\ShipForMe::where('status_id','=','3')->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total BuyForMe Orders</div>
                            <div class="widget-subheading">
                                Approved  Orders
                            </div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white">
                                <span>{{ \App\Models\BuyForMe::where('status_id','=','3')->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-happy-green">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Users</div>
                            <div class="widget-subheading">Only Role Based </div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white">
                                <span>{{ \App\Models\User::where('role_id','=','3')->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-premium-dark">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Products Sold</div>
                            <div class="widget-subheading">Revenue streams</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning">
                                <span>$14M</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  --}}
        </div>
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    ShipForMe - Performance Report
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-plugin text-white opacity-8"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading"> Pending Orders</div>
                            <div class="widget-numbers">{{ \App\Models\ShipForMe::where('status_id','=','1')->count() }} Order</div>

                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-plugin text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Rejected Order</div>
                            <div class="widget-numbers"><span>{{ \App\Models\ShipForMe::where('status_id', '=', '2')->count() }} Order</span></div>

                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-plugin text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Accepted Order</div>
                            <div class="widget-numbers"><span>{{ \App\Models\ShipForMe::where('status_id', '=', '3')->count() }} Order</span></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer">
                <a href="{{ url('app/shipforme-orders') }}" class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">
                                    <span class="mr-2 opacity-7">
                                        <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                    </span>
                    <span class="mr-1">View Complete Report</span>
                </a>
            </div>
        </div>
        {{-- New Buy For ME --}}
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    BuyForMe - Performance Report
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-plugin text-white opacity-8"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading"> Pending Orders</div>
                            <div class="widget-numbers text-warning">{{ \App\Models\BuyForMe::where('status_id','=','1')->count() }} Order</div>

                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-plugin text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Rejected Order</div>
                            <div class="widget-numbers text-danger"><span>{{ \App\Models\BuyForMe::where('status_id', '=', '2')->count() }} Order</span></div>

                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-plugin text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Accepted Order</div>
                            <div class="widget-numbers text-success"><span>{{ \App\Models\BuyForMe::where('status_id', '=', '3')->count() }} Order</span></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer">
                <a href="{{ url('app/buyforme-orders') }}" class="btn-pill btn-shadow btn-wide fsize-1 btn btn-info btn-lg">
                                    <span class="mr-2 opacity-7">
                                        <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                    </span>
                    <span class="mr-1">View Complete Report</span>
                </a>
            </div>
        </div>
        {{--  <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Active Users
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-focus">
                                    Last Week
                                </button>
                                <button class="btn btn-focus">All Month</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table
                            class="align-middle mb-0 table table-borderless table-striped table-hover"
                        >
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
                                                    <img
                                                        width="40"
                                                        class="rounded-circle"
                                                        src="assets/images/avatars/4.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">John Doe</div>
                                                <div class="widget-subheading opacity-7">
                                                    Web Developer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Madrid</td>
                                <td class="text-center">
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                                <td class="text-center" style="width: 150px">
                                    <div class="pie-sparkline">2,4,6,9,4</div>
                                </td>
                                <td class="text-center">
                                    <button
                                        type="button"
                                        id="PopoverCustomT-1"
                                        class="btn btn-primary btn-sm"
                                    >
                                        Details
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
                                                    <img
                                                        width="40"
                                                        class="rounded-circle"
                                                        src="assets/images/avatars/3.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">
                                                    Ruben Tillman
                                                </div>
                                                <div class="widget-subheading opacity-7">
                                                    Etiam sit amet orci eget
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Berlin</td>
                                <td class="text-center">
                                    <div class="badge badge-success">Completed</div>
                                </td>
                                <td class="text-center" style="width: 150px">
                                    <div id="sparkline-chart4"></div>
                                </td>
                                <td class="text-center">
                                    <button
                                        type="button"
                                        id="PopoverCustomT-2"
                                        class="btn btn-primary btn-sm"
                                    >
                                        Details
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
                                                    <img
                                                        width="40"
                                                        class="rounded-circle"
                                                        src="assets/images/avatars/2.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">
                                                    Elliot Huber
                                                </div>
                                                <div class="widget-subheading opacity-7">
                                                    Lorem ipsum dolor sic
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">London</td>
                                <td class="text-center">
                                    <div class="badge badge-danger">In Progress</div>
                                </td>
                                <td class="text-center" style="width: 150px">
                                    <div id="sparkline-chart8"></div>
                                </td>
                                <td class="text-center">
                                    <button
                                        type="button"
                                        id="PopoverCustomT-3"
                                        class="btn btn-primary btn-sm"
                                    >
                                        Details
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
                                                    <img
                                                        width="40"
                                                        class="rounded-circle"
                                                        src="assets/images/avatars/1.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">
                                                    Vinnie Wagstaff
                                                </div>
                                                <div class="widget-subheading opacity-7">
                                                    UI Designer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Amsterdam</td>
                                <td class="text-center">
                                    <div class="badge badge-info">On Hold</div>
                                </td>
                                <td class="text-center" style="width: 150px">
                                    <div id="sparkline-chart9"></div>
                                </td>
                                <td class="text-center">
                                    <button
                                        type="button"
                                        id="PopoverCustomT-4"
                                        class="btn btn-primary btn-sm"
                                    >
                                        Details
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
@endsection
