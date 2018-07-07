<header class="header menu_fixed">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- /Page Preload -->
    <div id="logo">
        <a href="/">
      <img src="/img/logo.png" height="34" data-retina="true" alt="" class="logo_normal">
      <img src="/img/logo_sticky.png" height="34" data-retina="true" alt="" class="logo_sticky">
  </a>
    </div>
    <ul id="top_menu">
        <li><a href="{{route('cart')}}" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
        <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>

            <li><span><a href="/">Home</a></span></li>
            <li><span><a href="{{route('blogs')}}">Blog</a></span></li>
            <li><span><a href="{{route('about')}}">About Us</a></span></li>
            <li><span><a href="{{route('gallery')}}">Media gallery</a></span></li>
            <li><span><a href="{{route('wishlist')}}">Wishlist page</a></span></li>
            <li><span><a href="{{route('contact')}}">Contact</a></span></li>
            <li><span><a href="{{route('login')}}">Login</a></span></li>
            <li><span><a href="{{route('customer.register')}}">Register</a></span></li>
            <li><span><a href="#">More</a></span>
                <ul>
                    <li><a href="{{route('about')}}">About Us</a></li>
                </ul>
            </li>

        </ul>
    </nav>

</header>