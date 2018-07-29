
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
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-12 col-6">
                    <div class="header-logo">
                        <a href="/"><img src="{{asset('img/dashboard_logo.png')}}" alt="Weddings | Find A Wedding Venue "></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-12 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="user-icon">  <img src="/img/avatar1.jpg" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name">Mayank Gupta</span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="vendor-dashboard-overview.html">Dashboard</a>
                                <a class="dropdown-item" href="vendor-dashboard-listing.html"> My Listed Item </a>
                                <a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>
                                <a class="dropdown-item" href="vendor-dashboard-request-quote.html">Request Quotes</a>
                                <a class="dropdown-item" href="vendor-dashboard-reviews.html">Reviews </a>
                                <a class="dropdown-item" href="vendor-dashboard-profile.html">My Profile </a>
                                <a class="dropdown-item" href="index.html">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="dashboard-sidebar">
                        <div class="vendor-user-profile">
                            <div class="vendor-profile-img">
                                <img src="/img/avatar1.jpg" alt="" class="rounded-circle"></div>
                            <h3 class="vendor-profile-name">Mayank Gupta</h3>
                            <a href="#" class="edit-link">edit profile</a>
                        </div>
                        <div class="dashboard-nav">
                            <ul class="list-unstyled">
                                <li class="active"><a href="vendor-dashboard-overview.html"><span class="dash-nav-icon">
                                    <i class="fas fa-compass"></i></span>Dashboard</a></li>
                                <li><a href="vendor-dashboard-listing.html"><span class="dash-nav-icon">
                                    <i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                                <li><a href="vendor-dashboard-pricing.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
                                <li><a href="vendor-dashboard-request-quote.html"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                                <li><a href="vendor-dashboard-reviews.html"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                                <li><a href="vendor-dashboard-profile.html"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                                <li><a href="index.html"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                    <div class="dashboard-box">
                        <div class="row">
                           <!--  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                                <div class="dashboard-vendor-icon"><img src="images/vendor-dahsboard-icon.png"></div>
                            </div> -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="dashboard-box-content">
                                    <p class="lead">Welcome to WeddingOSM Wedding vendor dashboard! Start add your wedding venue by just click <a href="#"  style="color:#ff4d4d;">add new venue.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="dashboard-box summary-block summary-vendor-wishlist">
                                <div class="summary-content">
                                    <div>
                                        <h3 class="summary-title ">List Items</h3></div>
                                    <div class="summary-count">6</div>
                                    <p class="summary-text">Total Listed Item</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="dashboard-box summary-block summary-vendor-wishlist">
                                <div class="summary-content">
                                    <div>
                                        <h3 class="summary-title ">Request Quote</h3></div>
                                    <div class="summary-count">5</div>
                                    <p class="summary-text">New Request Quote</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="dashboard-box summary-block summary-vendor-wishlist">
                                <div class="summary-content">
                                    <div>
                                        <h3 class="summary-title ">Your Reviews</h3></div>
                                    <div class="summary-count">2</div>
                                    <p class="summary-text">View Review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  
                </div>
            </div>
        </div>
    </div>
    </div>
    
<div id="dashboard_app"></div>

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