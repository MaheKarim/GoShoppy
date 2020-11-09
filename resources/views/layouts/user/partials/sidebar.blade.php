<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="mm-active">
                    <a href="{{ url('user/dashboard') }}" class="{{ Request::is('user.dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-home"></i>Dashboards
                    </a>
                </li>
                <li class="app-sidebar__heading">Payments Option</li>
                <li>
                    <a href="#" class="{{ Request::is('user/pay-now*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-like2"></i> Payments Send / Check
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('user.pay-now.index') }}" class="{{ Request::is('user/pay-now') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>Check Payment Status
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.pay-now.create') }}" class="{{ Request::is('user/pay-now/create') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>Send Payment Request
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="app-sidebar__heading">Courier Widgets</li>
                <!-- Courier Widget -->
                <li>
                    <a href="#" class="{{ Request::is('user/ShipForMe*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-light"></i> ShipForMe - Orders
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('user.ShipForMe.index') }}" class="{{ Request::is('user/ShipForMe') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>Check Order Status
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.ShipForMe.create') }}" class="{{ Request::is('user/ShipForMe/create') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>Send ShipForMe Request
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Courier Widget End -->
                <li>
                    <a href="#" class="{{ Request::is('user/BuyForMe*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-id"> </i>Buy For Me
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('user.BuyForMe.index') }}" class="{{ Request::is('user/BuyForMe') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>Check Buy Order Status
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('user.BuyForMe.create') }}" class="{{ Request::is('user/BuyForMe/create') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>Create Buy-For-Me Request
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="app-sidebar__heading">Settings Panel</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-light"></i> Your Settings
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('user.profileIndex') }}" class="{{ Request::is('user/profileIndex') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>Profile Update
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.profile.password.change') }}">
                                <i class="metismenu-icon"></i>Password Change
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
