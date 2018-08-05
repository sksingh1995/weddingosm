<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WeddingOSM - Best Wedding Planning Site - Online Wedding Planner">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WeddingOSM | Best Wedding Planning Site - Online Wedding Planner</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    {{--
        <link href="{{asset('ss/daterangepicker.css')}}" rel="stylesheet"> --}}

        <!-- YOUR CUSTOM CSS -->
        <link href="{{asset('css/custom.css')}}" rel="stylesheet"> @yield('styles')

        <script>
            var base_url = "{{URL::to('')}}/";
        </script>
    </head>

    <body>
        <div class="preloader" id="global-loader">
            <div data-loader="loader"></div>
        </div>
        <div id="app">
            <loader></loader>
            @include('layouts.header')
            <main>
                @yield('main')
            </main>
            @include('layouts.footer')

            <!-- Login Popup -->
            @include('popups.login')
        </div>

        <div id="toTop"></div>
        <!-- Back to top button -->
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            $(document).ready(function(){    
                $("#global-loader").fadeOut(1500);
            });
        </script>
        <script src="{{asset('js/common_scripts.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        @yield('scripts')
    </body>

    </html>