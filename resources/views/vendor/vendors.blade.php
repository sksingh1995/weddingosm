@extends('layouts.master') 
@section('main')
<section class="hero_in restaurants vendor-listing-page">
      <div class="wrapper">
            <!--<div class="container">
                  <h1 class="fadeInUp"><span></span>Paris Eat &amp; Drink grid</h1>
            </div>-->
      </div>
</section>
<!--/hero_in-->

<div class="filters_listing sticky_horizontal">
      <div class="container">
            <ul class="clearfix">
                  <li>
                        <div class="switch-field">
                              <input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
                              <label for="all">All</label>
                              <input type="radio" id="popular" name="listing_filter" value="popular" data-filter=".popular">
                              <label for="popular">Popular</label>
                              <input type="radio" id="latest" name="listing_filter" value="latest" data-filter=".latest">
                              <label for="latest">Latest</label>
                        </div>
                  </li>

                  <li>
                        <a class="btn_map">Current Location</a>
                  </li>
            </ul>
      </div>
      <!-- /container -->
</div>
<!-- /filters -->


<!-- End Map -->

<div class="container ">
      <div class="col-lg-12">
            <div class="row no-gutters custom-search-input-2 inner">
                  <div class="col-lg-4">
                        <div class="form-group">
                              <input class="form-control" type="text" placeholder="What are you looking for...">
                              <i class="icon_search"></i>
                        </div>
                  </div>
                  <div class="col-lg-3">
                        <div class="form-group">
                              <input class="form-control" type="text" placeholder="Where">
                              <i class="icon_pin_alt"></i>
                        </div>
                  </div>
                  <div class="col-lg-3">
                        <select class="wide">
                              <option>All Categories</option>	
                              <option>Restaurants</option>
                              <option>Bars</option>
                              <option>Coffee Bars</option>
                        </select>
                  </div>
                  <div class="col-lg-2">
                        <input type="submit" class="btn_search" value="Search">
                  </div>
            </div>
            <!-- /row -->
      </div>
      <!-- /custom-search-input-2 -->

      <div class="col-sm-12">
            <div class="more-filter">
                  <!-- <h6>More Filter</h6>  -->
                  <ul>
                        <li>
                              <label>
                                                      <input type="checkbox" class="icheck">Superb 9+ <small>(25)</small>
                                                </label>
                        </li>
                        <li>
                              <label>
                                                      <input type="checkbox" class="icheck">Very Good 8+ <small>(26)</small>
                                                </label>
                        </li>
                        <li>
                              <label>
                                                      <input type="checkbox" class="icheck">Good 7+ <small>(25)</small>
                                                </label>
                        </li>
                        <li>
                              <label>
                                                      <input type="checkbox" class="icheck">Pleasant 6+ <small>(12)</small>
                                                </label>
                        </li>
                  </ul>
            </div>
      </div>

      <div class="isotope-wrapper">
            <div class="row">
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="{{route('vendor.detail')}}"><img src="img/restaurant_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Paris Centre</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="{{route('vendor.detail')}}">King food</a></h3>
                                    <p><i class="icon-location-6"></i> Id placerat tacimates definitionem.</p>
                                    <span class="price">From <strong>$54</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="ti-eye"></i> 164 views</li>
                                    <li>
                                          <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="{{route('vendor.detail')}}"><img src="img/restaurant_2.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Paris Centre</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="{{route('vendor.detail')}}">Catrine</a></h3>
                                    <p><i class="icon-location-6"></i> Id placerat tacimates definitionem.</p>
                                    <span class="price">From <strong>$124</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="ti-eye"></i> 164 views</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="{{route('vendor.detail')}}"><img src="img/restaurant_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Paris Centre</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="{{route('vendor.detail')}}">Bella Napoli</a></h3>
                                    <p><i class="icon-location-6"></i> Id placerat tacimates definitionem.</p>
                                    <span class="price">From <strong>$25</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="ti-eye"></i> 164 views</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>


                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="hotel-detail.html"><img src="img/hotel_6.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Paris Centre</small>
                              </figure>
                              <div class="wrapper">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3><a href="hotel-detail.html">Concorde Hotel</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$95</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="ti-eye"></i> 164 views</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.8</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="hotel-detail.html"><img src="img/hotel_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Paris Centre</small>
                              </figure>
                              <div class="wrapper">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3><a href="hotel-detail.html">Concorde Hotel</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$45</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="ti-eye"></i> 164 views</li>
                                    <li>
                                          <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="hotel-detail.html"><img src="img/hotel_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Paris Centre</small>
                              </figure>
                              <div class="wrapper">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3><a href="hotel-detail.html">Louvre Hotel</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$65</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="ti-eye"></i> 164 views</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="tour-detail.html"><img src="img/tour_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Museum</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="tour-detail.html">Pompidue Museum</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$45</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="icon_clock_alt"></i> 2h 30min</li>
                                    <li>
                                          <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="tour-detail.html"><img src="img/tour_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Walking</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="tour-detail.html">Tour Eiffel</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$65</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="tour-detail.html"><img src="img/tour_6.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Museum</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="tour-detail.html">Louvre Museum</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$95</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.8</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->

                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="tour-detail.html"><img src="img/tour_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Museum</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="tour-detail.html">Pompidue Museum</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$45</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="icon_clock_alt"></i> 2h 30min</li>
                                    <li>
                                          <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="tour-detail.html"><img src="img/tour_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Walking</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="tour-detail.html">Tour Eiffel</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$65</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                              <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="tour-detail.html"><img src="img/tour_6.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <small>Museum</small>
                              </figure>
                              <div class="wrapper">
                                    <h3><a href="tour-detail.html">Louvre Museum</a></h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                    <span class="price">From <strong>$95</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                    <li>
                                          <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.8</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  <!-- /box_grid -->

            </div>
            <!-- /row -->





      </div>
      <!-- /isotope-wrapper -->

      <p class="text-center" style="margin-bottom:40px;"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>

</div>
<!-- /container -->

<div class="bg_color_1">
      <div class="container margin_60_35">
            <div class="row">
                  <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                              <i class="pe-7s-help2"></i>
                              <h4>Need Help? Contact us</h4>
                              <p>Cum appareat maiestatis interpretaris et, et sit.</p>
                        </a>
                  </div>
                  <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                              <i class="pe-7s-wallet"></i>
                              <h4>Payments</h4>
                              <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
                        </a>
                  </div>
                  <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                              <i class="pe-7s-note2"></i>
                              <h4>Cancel Policy</h4>
                              <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
                        </a>
                  </div>
            </div>
            <!-- /row -->
      </div>
      <!-- /container -->
</div>
<!-- /bg_color_1 -->
@endsection