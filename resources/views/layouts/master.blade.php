<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WeddingOSM - Best Wedding Planning Site - Online Wedding Planner">

    <title>WeddingOSM | Best Wedding Planning Site - Online Wedding Planner</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/vendors.css" rel="stylesheet">
    <link href="/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    {{--
    <link href="css/daterangepicker.css" rel="stylesheet"> --}}

    <!-- YOUR CUSTOM CSS -->
    <link href="/css/custom.css" rel="stylesheet"> @yield('styles')
</head>

<body>

    <div id="page">
    @include('layouts.header')
        <main>
            @yield('main')
        </main>
    @include('layouts.footer')

    </div>
    @include('popups.login')

    <div id="toTop"></div>
    <!-- Back to top button -->

    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/common_scripts.js"></script>
    <script src="/js/main.js"></script>
    <script src="/assets/validate.js"></script>
    @yield('scripts')
</body>

</html>