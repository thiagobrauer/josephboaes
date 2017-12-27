<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page') | Joseph Boaes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="{{ asset('frontend/css/global/vendor.css') }}" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

        @yield('stylesheets')
        
    </head>
    <body style="max-height:  100vh;" >

        @yield('body')
            
        @include('layouts.footer')

        <script type='text/javascript' src="{{ asset('frontend/js/global/vendor.js') }}"></script>
        
        @yield('scripts')

    </body>
</html>