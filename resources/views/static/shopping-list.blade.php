 @extends('layouts.master') @section('styles')

<link href="{{asset('css/shopping-style.css')}}" rel="stylesheet"> @endsection @section('main')

<section class="hero_in general" style="height:80px; background: url(img/wedding-shopping-banner.jpg); background-position: center;">
    <div class="wrapper">

    </div>
</section>
<!--/hero_in-->

<div class="bg_color_1">

    <div class="container margin_60_35">
        <div class="row">

            <aside class="col-lg-4" id="sidebar">
                <div class="shopping-side-bar">
                    <div class="price">

                        <div class="score" style="margin-bottom: 20px; margin-top: -15px;"><strong>Filter product by</strong></div>

                        <div role="tablist" class="add_bottom_45 accordion_2" id="payment">

                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseOne_payment" aria-expanded="false">
										<i class="indicator ti-plus"></i>Category
									</a>
								</h5>
                                </div>
                                <div id="collapseOne_payment" class="collapse" role="tabpanel" data-parent="#payment">
                                    <div class="card-body">

                                        <form class="form-wrapper">
                                            <div class="option-wrapper">
                                                <input type="checkbox" name="cool-checkboxes" id="cool1" value="1">
                                                <label class="label-text" for="cool1">Male </label>
                                            </div>
                                            <div class="option-wrapper">
                                                <input type="checkbox" name="cool-checkboxes" id="cool2" value="2">
                                                <label for="cool2">Female</label>
                                            </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
										<i class="indicator ti-plus"></i>Price
									</a>
								</h5>
                                </div>
                                <div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#payment">
                                    <div class="card-body">

                                        <span class="multi-range">
    <input type="range" min="0" max="50" value="5" id="lower">
    <input type="range" min="0" max="50" value="45" id="upper">
</span>

                                    </div>
                                </div>
                            </div>

                            <!-- /card -->
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
										<i class="indicator ti-plus"></i>Size
									</a>
								</h5>
                                </div>
                                <div id="collapseThree_payment" class="collapse" role="tabpanel" data-parent="#payment">
                                    <div class="card-body">

                                        <ul class="category-list size-list" style="display: block;">
                                            <li>
                                                <div>
                                                    <input class="fliter_ids checkbox-custom" id="29-size" name="size[]" type="checkbox" value="29">
                                                    <label class="size-radio-label" for="29-size">S</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <input class="fliter_ids checkbox-custom" id="30-size" name="size[]" type="checkbox" value="30">
                                                    <label class="size-radio-label" for="30-size">M</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <input class="fliter_ids checkbox-custom" id="31-size" name="size[]" type="checkbox" value="31">
                                                    <label class="size-radio-label" for="31-size">L</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <input class="fliter_ids checkbox-custom" id="32-size" name="size[]" type="checkbox" value="32">
                                                    <label class="size-radio-label" for="32-size">XL</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <input class="fliter_ids checkbox-custom" id="33-size" name="size[]" type="checkbox" value="33">
                                                    <label class="size-radio-label" for="33-size">XXL</label>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>

                    </div>

                </div>

            </aside>

            <div class="col-lg-8">

                <div class="isotope-wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 isotope-item popular">
                            <div class="box_grid shop_product">
                                <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="#0"><img src="img/shop-1.jpg" class="img-fluid" alt="" width="800" height="533">
                                        <div class="read_more"><span>View Product</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper text-left">
                                    <h3><a href="#0">Lemon yellow cold shoulder with heavy gree...</a></h3>
                                    <span class="price"> <strong>$25999.00</strong> </span>
                                </div>
                                <!--<ul>
							<li><div class="add-to-cart-btn"> Add to cart</div></li>
							<li><div class="buy-now-btn"> Buy Now</div></li>
						</ul>-->

                            </div>
                        </div>
                        <!-- /box_grid -->
                        <div class="col-xl-6 col-lg-6 col-md-6 isotope-item popular">
                            <div class="box_grid shop_product">
                                <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="#0"><img src="img/shop-1.jpg" class="img-fluid" alt="" width="800" height="533">
                                        <div class="read_more"><span>View Product</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper text-left">
                                    <h3><a href="#0">Lemon yellow cold shoulder with heavy gree...</a></h3>
                                    <span class="price"> <strong>$25999.00</strong> </span>
                                </div>
                                <!--<ul>
							<li><div class="add-to-cart-btn"> Add to cart</div></li>
							<li><div class="buy-now-btn"> Buy Now</div></li>
						</ul>-->

                            </div>
                        </div>
                        <!-- /box_grid -->

                        <div class="col-xl-6 col-lg-6 col-md-6 isotope-item popular">
                            <div class="box_grid shop_product">
                                <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="#0"><img src="img/shop-1.jpg" class="img-fluid" alt="" width="800" height="533">
                                        <div class="read_more"><span>View Product</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper text-left">
                                    <h3><a href="#0">Lemon yellow cold shoulder with heavy gree...</a></h3>
                                    <span class="price"> <strong>$25999.00</strong> </span>
                                </div>
                                <!--<ul>
							<li><div class="add-to-cart-btn"> Add to cart</div></li>
							<li><div class="buy-now-btn"> Buy Now</div></li>
						</ul>-->

                            </div>
                        </div>
                        <!-- /box_grid -->
                        <div class="col-xl-6 col-lg-6 col-md-6 isotope-item popular">
                            <div class="box_grid shop_product">
                                <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="#0"><img src="img/shop-1.jpg" class="img-fluid" alt="" width="800" height="533">
                                        <div class="read_more"><span>View Product</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper text-left">
                                    <h3><a href="#0">Lemon yellow cold shoulder with heavy gree...</a></h3>
                                    <span class="price"> <strong>$25999.00</strong> </span>
                                </div>
                                <!--<ul>
							<li><div class="add-to-cart-btn"> Add to cart</div></li>
							<li><div class="buy-now-btn"> Buy Now</div></li>
						</ul>-->

                            </div>
                        </div>
                        <!-- /box_grid -->

                    </div>

                </div>
                <!-- /isotope-wrapper -->

            </div>
            <!-- /col -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var lowerSlider = document.querySelector('#lower'),
            upperSlider = document.querySelector('#upper'),
            lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);

        upperSlider.oninput = function() {
            lowerVal = parseInt(lowerSlider.value);
            upperVal = parseInt(upperSlider.value);

            if (upperVal < lowerVal + 4) {
                lowerSlider.value = upperVal - 4;

                if (lowerVal == lowerSlider.min) {
                    upperSlider.value = 4;
                }
            }
        };

        lowerSlider.oninput = function() {
            lowerVal = parseInt(lowerSlider.value);
            upperVal = parseInt(upperSlider.value);

            if (lowerVal > upperVal - 4) {
                upperSlider.value = lowerVal + 4;

                if (upperVal == upperSlider.max) {
                    lowerSlider.value = parseInt(upperSlider.max) - 4;
                }

            }
        }; < span class = "multi-range" >
            < input type = "range"
        min = "0"
        max = "50"
        value = "5"
        id = "lower" >
            < input type = "range"
        min = "0"
        max = "50"
        value = "45"
        id = "upper" >
            < /span>
    </script>

    @endsection