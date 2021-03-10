<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button
                    type="button"
                    class="hamburger close-sidebar-btn hamburger--elastic"
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
            <button
                type="button"
                class="hamburger hamburger--elastic mobile-toggle-nav"
            >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
            <span>
              <button
                  type="button"
                  class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
              >
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
                <li>
                    <a href="{{ route('app.dashboard') }}" class="{{ Route::is('app.dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboards
                    </a>
                </li>
                <li>
                    <a href="{{ url('app/shipforme-orders') }}" class="{{ Request::is('app/shipforme-orders*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-plugin"></i>
                        ShipForMe - Import
                    </a>
                </li>
                <li>
                    <a href="{{ url('app/buyforme-orders') }}" class="{{ Request::is('app/buyforme-orders*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-plane"></i>
                        BuyForMe - Export
                    </a>
                </li>
                <li>
                    <a href="{{ url('app/payment-receive') }}" class="{{ Request::is('app/payment-receive*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Payment Receive Status
                    </a>
                </li>
                <li>
                    <a href="{{ url('app/client-quote') }}" class="{{ Request::is('app/client-quote*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-right-arrow"></i>
                        Client Quote
                    </a>
                </li>

                <li class="app-sidebar__heading">Management Section</li>
                <li >
                    <a href="{{ route('app.roles.index') }}" class="{{ Request::is('app/roles*') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-check"></i>
                        Roles
                    </a>
                </li>

                <li >
                    <a href="{{ route('app.users.index') }}" class="{{ Request::is('app/users*') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Users
                    </a>
                </li>
                <li >
                    <a href="{{ route('app.payment-service.index') }}" class="{{ Request::is('app/payment-service*') ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-cash"></i>
                        Payment Service
                    </a>
                </li>
                <li class="app-sidebar__heading">System Functionalities</li>
                <li>
                    <a href="{{ route('app.us-address.index') }}" class="{{ Request::is('app/us-address*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-ribbon"></i>
                        US Address
                    </a>
                </li>
                <li>
                    <a href="{{ route('app.status.index') }}" class="{{ Request::is('app/status*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-gleam"></i>
                        Status
                    </a>
                </li>
                <li>
                    <a href="{{ route('app.courier-types.index') }}" class="{{ Request::is('app/courier-types*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-safe"></i>
                        Courier Type's
                    </a>
                </li>

                <li class="app-sidebar__heading">Website Functionalities</li>
                <li>
                    <a href="{{ route('app.faq-system.index') }}" class="{{ Request::is('app/faq*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-comment"></i>
                        FAQ
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
