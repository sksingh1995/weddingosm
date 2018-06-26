@extends('layouts.master') 
@section('main')
<section class="hero_single version_2">
    <div class="wrapper">
        <div class="container banner-box">
            <h3>Your Wedding, Your Way</h3>
            <p>Expolore top rated vendors, ideas and more</p>
    @include('includes.vendor-search-form')
        </div>

        <a href="{{route('vendor.register')}}" style="color:#fff;">
            <div class="fs1 are-you-vendor-btn" aria-hidden="true" data-icon="">&nbsp Are you a vendor?
            </div>
        </a>

    </div>
</section>
<!-- /hero_single -->


<div class="container-fluid margin_80_0">
    <div class="main_title_2">
        <span><em></em></span>
        <h2>Find Vendors At Every Budget</h2>
        <p>Photographers, venues, makeup artists & more at your budget & style.</p>
    </div>
    <div id="reccomended" class="owl-carousel owl-theme">
        <div class="item">
            <div class="box_grid">
                <figure>

                    <a href="vendor-listing.html"><img src="/img/vendors/venues.jpg" class="img-fluid" alt="" width="800" height="533">
                <div class="read_more"><span>Read more</span></div>
            </a>

                </figure>
                <div class="wrapper">
                    <h3><a href="vendor-listing.html">Wedding Venues</a></h3>

                </div>

            </div>
        </div>
        <!-- /item -->
        <div class="item">
            <div class="box_grid">
                <figure>

                    <a href="vendor-listing.html"><img src="/img/vendors/wedding-photographer.jpg" class="img-fluid" alt="" width="800" height="533">
                <div class="read_more"><span>Read more</span></div>
            </a>

                </figure>
                <div class="wrapper">
                    <h3><a href="vendor-listing.html"> Wedding Photographers</a></h3>
                </div>

            </div>
        </div>
        <!-- /item -->
        <div class="item">
            <div class="box_grid">
                <figure>

                    <a href="vendor-listing.html"><img src="/img/vendors/bridal-makeup.jpg" class="img-fluid" alt="" width="800" height="533">
                <div class="read_more"><span>Read more</span></div>
            </a>

                </figure>
                <div class="wrapper">
                    <h3><a href="vendor-listing.html">Bridal Makeup</a></h3>
                </div>
            </div>
        </div>
        <!-- /item -->
        <div class="item">
            <div class="box_grid">
                <figure>

                    <a href="vendor-listing.html"><img src="/img/vendors/wedding-decorator.jpg" class="img-fluid" alt="" width="800" height="533">
                <div class="read_more"><span>Read more</span></div>
            </a>

                </figure>
                <div class="wrapper">
                    <h3><a href="vendor-listing.html">Wedding Decorators</a></h3>
                </div>
            </div>
        </div>
        <!-- /item -->
        <div class="item">
            <div class="box_grid">
                <figure>

                    <a href="vendor-listing.html"><img src="/img/vendors/bride-wear.jpg" class="img-fluid" alt="" width="800" height="533">
                <div class="read_more"><span>Read more</span></div>
            </a>

                </figure>
                <div class="wrapper">
                    <h3><a href="vendor-listing.html">Bridal Wear</a></h3>
                </div>
            </div>
        </div>
        <!-- /item -->
        <div class="item">
            <div class="box_grid">
                <figure>

                    <a href="vendor-listing.html"><img src="/img/vendors/wedding-card-design.jpg" class="img-fluid" alt="" width="800" height="533">
                <div class="read_more"><span>Read more</span></div>
            </a>

                </figure>
                <div class="wrapper">
                    <h3><a href="vendor-listing.html">Wedding Cards</a></h3>
                </div>
            </div>
        </div>
        <!-- /item -->
    </div>
    <!-- /carousel -->
    <div class="container">
        <p class="btn_home_align"><a href="vendor-listing.html" class="btn_1 rounded">View all</a></p>
    </div>
    <!-- /container -->
    <hr class="large">
</div>
<!-- /container -->

<div class="container-fluid margin_30_95 pl-lg-5 pr-lg-5">
    <section class="add_bottom_45">
        <div class="main_title_3">
            <span><em></em></span>
            <h2>Popular Wedding Destinations</h2>
            <p>Dummy text doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="hotel-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>8.9</strong></div>
                        <img src="/img/hotel_1.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h3>Mariott Party Lawn</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="hotel-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>7.9</strong></div>
                        <img src="/img/hotel_2.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h3>Concorde 5 Star Hotel </h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="hotel-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>7.0</strong></div>
                        <img src="/img/hotel_3.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h3>Louvre </h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="hotel-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>8.9</strong></div>
                        <img src="/img/hotel_4.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h3>Park Yatt </h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /row -->
        <a href="vendor-listing.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
    </section>
    <!-- /section -->

    <section>
        <div class="main_title_3">
            <span><em></em></span>
            <h2>Popular Food Services</h2>
            <p>Dummy text doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="restaurant-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>8.5</strong></div>
                        <img src="/img/restaurant_1.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <h3>Heading</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="restaurant-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>7.9</strong></div>
                        <img src="/img/restaurant_2.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <h3>Slow Food</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="restaurant-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>7.5</strong></div>
                        <img src="/img/restaurant_3.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <h3>Western</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="restaurant-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>9.0</strong></div>
                        <img src="/img/restaurant_4.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <h3>Non Veg</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /row -->
        <a href="vendor-listing.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
    </section>
    <!-- /section -->
</div>
<!-- /container -->

<div class="bg_color_1">
    <div class="container margin_80_55">
        <div class="main_title_2">
            <span><em></em></span>
            <h3>Great Ideas with Best Advice</h3>
            <p>Practical, on trend advice you cannot afford to miss out. Think of it like your wedding planning BFF.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a class="box_news" href="#0">
                    <figure><img src="/img/news_home_1.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Mark Twain</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Jaipur Luxury Wedding</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="#0">
                    <figure><img src="/img/news_home_2.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Jhon Doe</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Jaipur Luxury Wedding</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="#0">
                    <figure><img src="/img/news_home_3.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Luca Robinson</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Jaipur Luxury Wedding</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="#0">
                    <figure><img src="/img/news_home_4.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Paula Rodrigez</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Jaipur Luxury Wedding</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
        </div>
        <!-- /row -->
        <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
    </div>
    <!-- /container -->
</div>
<!-- /bg_color_1 -->


<div class="call_section">
    <div class="container clearfix">
        <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <div class="box_1">
                    <h3>Enjoy a GREAT Wedding with us</h3>
                    <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis
                        ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                    <a href="#0" class="btn_1 rounded">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/call_section-->
@endsection