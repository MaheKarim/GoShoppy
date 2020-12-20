<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>User Dashboard </title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description"
          content="This dashboard was created as an example of the flexibility that Architect offers.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('/') }}main.css" rel="stylesheet">
    @stack('css_new')
    @stack('css_user')
    @stack('wizard')
    @yield('paypal_script')
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <!-- @ Header Will Be Here -->
    @include('layouts.user.partials.header')

    <div class="app-main">
      <!-- Sidebar will be Here -->
        @include('layouts.user.partials.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
            <!-- Here layouts > user > partials > footer -->
            @include('layouts.user.partials.footer')
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('/') }}assets/scripts/main.js"></script>
@stack('js_new')
@stack('wizard_js')
@stack('js_user')

@yield('paypal')
</body>
</html>
