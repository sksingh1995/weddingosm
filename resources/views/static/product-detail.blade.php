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

            <div class="col-lg-5">


            </div>


            <div class="col-lg-7">
                <div class="isotope-wrapper">

                	<div class="product-description">
                	   <h3>Heavy Embroidered Sherwani With The Touch Of Maroon Velvet</h3>
                	   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                	   tempor incididunt ut labore et dolore magna aliqua.</p>
                		</div>

                		<div class="product-size">

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



                                    <div><strong>Dispatch between 2-5 working days</strong></div>

                                    <div class="product-price">
                                    	$ 17999.00
                                    </div>

                                    <div class="buy-now-btn">
                                    	<button>Add to Cart</button>
                                    	<button>Buy Now</button>
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