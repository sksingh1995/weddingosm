<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WeddingOSM | Vendor Dashboard - Overview</title>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

    <!-- FontAwesome icon -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

</head>

<body>
    @include('dashboard.includes.dashboard-header')
    <div class="dashboard-content" id="dashboard_app">
        <div class="container">
            <div class="row">
                @include('dashboard.includes.sidebar')
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                   @yield('main')
               </div>
           </div>
       </div>
   </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/dashboard_main.js')}}"></script>
<script src="{{asset('js/dashboard_menu_maker.js')}}"></script>
<script src="{{asset('js/dashboard_custom.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--     <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> -->
</body>

</html>