<footer id="footer" class="footer-main-block">
    <div class="container">
        <div class="row text-white">
            <div class="col-lg-5 col-sm-4">
                <div class="about-widget footer-widget">
                    <div class="logo-footer">
                        {{--  <a href="{{ url('/') }}" title="logo"><img src="{{ asset('/') }}frontend/images/logo-white.png" alt="logo"></a>  --}}
                     <a href="{{ url('/') }}" title="logo">
                    <h1 style="color: white">InnoX</h1>
                    </a>

                    </div>
                    <p>There anyone who loves or pursues not some great to have pleasure.</p>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="footer-icon">
                                <i class="las la-home"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="footer-address">USA Office</div>
                            <div class="footer-address-dtl">3029A, Melbourne, Australia</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="footer-icon">
                                <i class="las la-home"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="footer-address">Bangladesh Office</div>
                            <div class="footer-address-dtl">3029A, Melbourne, Australia</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="footer-icon">
                                <i class="las la-phone"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="footer-address">Reach Us</div>
                            <div class="footer-address-dtl">+4 123 123 4555 8888</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <div class="courier-type-widget footer-widget mrg-btm-30">
                    <h6 class="footer text-white">Our Services</h6>
                    <div class="footer-list">
                        <ul>
                            <li><a href="{{ url('/login') }}" title="link"><i class="las la-arrow-circle-right"></i> Login</a></li>
                            <li><a href="{{ url('/register') }}" title="link"><i class="las la-arrow-circle-right"></i> Register</a></li>
                            <li><a href="{{ url('/order-tracking') }}" title="link"><i class="las la-arrow-circle-right"></i>Order Tracking</a></li>
                            <li><a href="{{ url('/faq') }}" title="link"><i class="las la-arrow-circle-right"></i>FAQ</a></li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="news-widget footer-widget mrg-btm-30">
                    <h6 class="footer text-white">Newsletter</h6>
                    <p>Sign up to our courier point for surveys recent updates &amp; offers.</p>
                    <form id="subscribe-form" class="footer-form">
                        <div class="form-group">
                            <input type="email" id="mc-email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <button type="submit" class="btn btn-primary" title="subscribe">Subscribe</button>
                        <label for="mc-email"></label>
                    </form>
                    <br>
                    <div class="footer-social">
                        <ul>
                            <li>Follow Us :</li>
                            <li><a href="https://facebook.com/" target="_blank" title="facebook"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank" title="twitter"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://youtube.com/" target="_blank" title="youtube"><i class="lab la-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-block">
                        <p>&copy; {{ now()->year }} <a href="{{ url('/') }}" title="InnoX courier service">InnoX</a> |  All Rights Reserved.  </p>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="copyright-social">
                        <ul>
                            <li class="policy"><a href="#" title="Privacy Policy">Privacy Policy </a></li>
                            <li><a href="#" title="Terms &amp; Conditions"> Terms &amp; Conditions </a></li>

                            <li >
                                <a href="#"  title="Developer"> <i class="las la-globe"></i>   Developed by  <a href="https://mahekarim.me" target="_blank">❤️ InnoX</a></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->

<!-- Scroll Top Area -->
<a href="#top" class="go-top" style="display: block;"><i class="las la-angle-up"></i></a>
