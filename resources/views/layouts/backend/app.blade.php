<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'InnoX') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">

    @stack('maheCSS')
    @stack('css')
    @stack('cssUS')
</head>
<body>
    <div id="app" class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('layouts.backend.partials.header')
        <div class="app-main">
            @include('layouts.backend.partials.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')

                </div>
                @include('layouts.backend.partials.footer')
            </div>
        </div>

    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
{{--    <script--}}
{{--        type="text/javascript"--}}
{{--        src="assets/scripts/main.js">--}}
{{--    </script>--}}
    <!-- Scripts -->
    <script src="{{ asset('assets/scripts/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @include('vendor.lara-izitoast.toast')

@stack('maheJS')
@stack('js')
@stack('jsUS')

</body>
</html>
