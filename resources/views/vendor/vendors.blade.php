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

<!-- <div class="filters_listing sticky_horizontal">
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
</div> -->


<!-- /filters -->


<!-- End Map -->

<div class="container ">
      <div class="col-lg-12">
            @include('includes.vendor-search-form')
            <br>
      </div>
      <!-- /custom-search-input-2 -->

<!--       <div class="col-sm-12">
            <div class="more-filter">
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
      </div> -->

      @if(!$vendors->count())
      <p class="alert alert-danger text-center">
            <strong>No Vendors Found For Your Search!</strong>
      </p>
      @else
      <div class="isotope-wrapper">
            <div class="row">
                  @foreach($vendors as $vendor)
                  <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                              <figure>
                                    <a href="#" class="wish_bt"></a>
                                    <a href="{{route('vendor.detail',[$vendor->vendorProfile->serviceUrl(),$vendor->vendorProfile->businessNameUrl()])}}"><img src="{{asset('img/restaurant_1.jpg')}}" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                                    <!-- <small>Paris Centre</small> -->
                              </figure>

                              <div class="wrapper">
                                    <h3><a href="{{route('vendor.detail',[$vendor->vendorProfile->serviceUrl(),$vendor->vendorProfile->businessNameUrl()])}}">{{ucwords($vendor->vendorProfile->business_name)}}</a></h3>
                                    <p><i class="icon-location-6"></i> {{ucwords($vendor->vendorProfile->city->city_name)}}</p>
                                    <span class="price">From <strong>${{mt_rand(100,500)}}</strong> /per person</span>
                              </div>
                              <ul>
                                    <li><i class="ti-eye"></i> {{mt_rand(100,500)}} views</li>
                                    <li>
                                          <div class="score"><span>Superb<em>{{mt_rand(50,500)}} Reviews</em></span><strong>{{mt_rand(1,5)}}</strong></div>
                                    </li>
                              </ul>
                        </div>
                  </div>
                  @endforeach
            </div>
            <!-- /row -->
      </div>
      <!-- /isotope-wrapper -->

      <p class="text-center" style="margin-bottom:40px;"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
      @endif
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

@section('scripts')
<script src="{{asset('js/welcome.js')}}"></script>
@endsection