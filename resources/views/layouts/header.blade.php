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
            <li><span><a href="{{route('vendor.all')}}">Best Wedding Vendors</a></span>
                <ul>
                    <li><a href="{{route('vendor.detail')}}">Mehandi</a></li>
                    <li><a href="{{route('vendor.detail')}}">Catering</a></li>
                </ul>
            </li>
            <li><span><a href="#0">Best Venus</a></span>

            </li>
            <li><span><a href="#0">Bride Wear</a></span>
                <ul>
                    <li><a href="#"> Lehenga</a></li>
                    <li><a href="#">Jewellery</a></li>
                    <li><a href="#">Foot Wear</a></li>
                </ul>
            </li>
            <li><span><a href="">Wedding Ideas</a></span>
            </li>

            <li><span><a href="{{route('blogs')}}">Blog</a></span></li>

            <li><span><a href="">More</a></span>
                <ul>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('gallery')}}">Media gallery</a></li>
                    <li><a href="help.html">Help Section</a></li>
                    <li><a href="faq.html">Faq Section</a></li>
                    <li><a href="{{route('wishlist')}}">Wishlist page</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('customer.login')}}">Login</a></li>
                    <li><a href="{{route('customer.register')}}">Register</a></li>

                </ul>
            </li>

        </ul>
    </nav>

</header>