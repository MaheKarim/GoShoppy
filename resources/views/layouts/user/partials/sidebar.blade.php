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



                <li class="app-sidebar__heading">Courier Widgets</li>
                <li>
                    <a href="widgets-chart-boxes.html" >
                        <i class="metismenu-icon pe-7s-graph"></i>Ship For Me
                    </a>
                </li>

                <li>
                    <a href="widgets-profile-boxes.html">
                        <i class="metismenu-icon pe-7s-id"></i>Buy For Me
                    </a>
                </li>
                <li class="app-sidebar__heading">Settings Panel</li>
                <li
                >
                    <a href="#">
                        <i class="metismenu-icon pe-7s-light"></i> Your Settings
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul
                    >
                        <li>
                            <a href="forms-controls.html">
                                <i class="metismenu-icon"></i>Password Change
                            </a>
                        </li>
                        <li>
                            <a href="forms-layouts.html">
                                <i class="metismenu-icon"></i>Profile Image
                            </a>
                        </li>
                        <li>
                            <a href="forms-validation.html">
                                <i class="metismenu-icon"></i>Profile Update
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
