<div id="nav-bar" class="nav-bar-main-block absolute">
    <div class="sticky-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="logo">
                        {{--  <a href="{{ url('/') }}" title="logo"><img src="{{ asset('/') }}frontend/images/logo-white.png" alt="logo"></a>  --}}
                    </div>
                    <!-- Responsive Menu Area -->
                    <div class="responsive-menu-wrap"></div>
                </div>
                <div class="col-lg-7">
                    <div class="navigation text-white theme-2">
                        <div id="cssmenu">
                            <ul>
                                <li class="active">
                                    <a href="{{ url('/') }}" title="Home">Home +</a>
                                </li>
                                <li><a href="#" title="services">Services +</a>
                                    <ul>
                                        <li><a href="services.html" title="Services">Ship For Me</a></li>
                                        <li><a href="service-details.html" title="Service Details">Buy For Me</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="Pages">Pages +</a>
                                    <ul>
                                        <li><a href="{{ url('/faq') }}" title="faq">FAQ</a></li>
                                        <li><a href="team.html" title="Team">Team</a></li>
                                        <li><a href="quotation.html" title="Quotation">Quotation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('order-tracking') }}" title="order-tracking">Order Track</a>
                                </li>
                                <li>
                                    <a href="{{ url('/register') }}" title="FAQ">Sign Up</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="navigation-btn">
                        @if(!Auth::user())
                        <a href="{{ url('/login') }}" class="btn btn-primary" title="get quotes">Login/Sign Up</a>
                        @endif
                        @auth()
                            @if(Auth::check() && Auth::user()->role->id == 1 ) {
                                <a href="{{ route('app.dashboard') }}" class="btn btn-primary" title="get quotes">Dashboard</a>
                             } @else {
                                <a href="{{ route('user.dashboard.index') }}" class="btn btn-primary" title="get quotes">Dashboard</a>
                                }
                                @endif
                            @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
