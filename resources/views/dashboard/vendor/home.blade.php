@extends('dashboard.master')

@section('main')
<div class="dashboard-box">
    <div class="row">
                            <!--  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                                <div class="dashboard-vendor-icon"><img src="images/vendor-dahsboard-icon.png"></div>
                            </div> -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="dashboard-box-content">
                                    <p class="lead">Welcome to WeddingOSM Wedding vendor dashboard! Start add your wedding venue by just click <a href="#" style="color:#ff4d4d;">add new venue.</a></p>
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
                                @endsection