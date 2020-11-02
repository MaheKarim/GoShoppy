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
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                        Buttons
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                         class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span> Inbox</span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span> Book</span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span> Picture</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span> File Disabled</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="mb-3 profile-responsive card">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-dark">
                            <div class="menu-header-image opacity-1"
                                 style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                            <div class="menu-header-content btn-pane-right">
                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                    <div class="avatar-icon rounded">
                                        <img src="/assets/images/avatars/1.jpg" alt="Avatar 5"></div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title">{{ Auth::user()->name }}</h5>
                                    <h6 class="menu-header-subtitle">Etiam sit amet orci eget</h6>
                                </div>
                                <div class="menu-header-btn-pane">
                                    <button class="btn btn-success">View Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content pt-4 pb-4 pr-1 pl-1">
                                <div class="text-center">
                                    <h5 class="mb-0">
                                                        <span class="pr-1">
                                                            <b class="text-danger">Buy</b> from Abroad,
                                                        </span>
                                        <span> Send To <b class="text-success">Bangladesh</b>  </span>
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li class="p-0 list-group-item">
                            <div class="grid-menu grid-menu-2col">
                                <div class="no-gutters row">
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <button
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                <i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"></i>
                                                Buy For Me
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <button
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"></i>
                                                Send For Me
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-1">
                                            <button
                                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"></i>
                                                Deposit
                                            </button>
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
            <h5 class="menu-header-title text-capitalize mb-3 fsize-3">Your Last Transaction</h5>
            <div role="group" class="mb-3 btn-group-lg btn-group">
                <button type="button" class="btn-shadow active btn btn-primary">Hour</button>
                <button type="button" class="btn-shadow  btn btn-primary">Day</button>
                <button type="button" class="btn-shadow  btn btn-primary">Week</button>
                <button type="button" class="btn-shadow  btn btn-primary">Month</button>
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
