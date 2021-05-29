<div class="app-header header-shadow">
    <div class="app-header__logo">
        {{--  <div class="logo-src"></div>  --}}
        <h1>InnoX</h1>
        <div class="header__pane ml-auto">
            <div>
                <button
                    type="button"
                    class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar"
                >
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
    <div class="app-header__content">
        <div class="app-header-left">
            <ul class="header-menu nav">
                <li class="dropdown nav-item">
                    <a href="{{ url('/') }}" target="_blank" class="nav-link">
                        <i class="nav-link-icon fa fa-cog">
                        </i>
                        Visit Site
                    </a>
                </li>
            </ul>
        </div>
        <div class="app-header-right">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img
                                        width="42"
                                        class="rounded-circle" src="{{ Auth::user()->getFirstMediaUrl('avatar') }}" alt="User Profile Image"/>
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>

                                <div tabindex="-1" role="menu" aria-hidden="true"
                                     class="dropdown-menu dropdown-menu-right">
                                   <a href="{{ route('app.profile.index') }}" tabindex="0" class="dropdown-item">Profile Update</a>
                                   <a href="{{ route('app.password.index') }}" tabindex="0" class="dropdown-item">Password Change</a>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button
                                        class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                <div class="header-btn-lg pr-0">
                                    <div class="widget-content-right">
                                        <div class="widget-heading">{{ Auth::user()->name }}</div>
                                        {{--  <div class="widget-subheading opacity-8">Personal Balance: <b> {{ Auth::user()->deposit_balance }} </b> BDT</div>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</div>
