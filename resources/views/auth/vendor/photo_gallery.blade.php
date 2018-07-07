@extends('auth.layouts') 
@section('main')
	<div id="vendor-register">
        <div class="vendor-register-box">

            <figure style="text-align: center;">
                <a href="/"><img src="/img/logo_sticky.png" height="35" data-retina="true" alt="" class="logo_sticky"></a>
                <div class="vendor-register-welcome-text">
                    <h3>"Grow your Business with WeddingOSM"</h3>
                    <p>Sign Up to access your Dashboard</p>
                </div>
            </figure>

            <div class="container-process">
                <ul class="list-unstyled multi-steps">
                    <li>General Information
                    </li>
                    <li >Frequently Asked Questions</li>
                    <li class="is-active">Photo gallery</li>

                </ul>
            </div> 

            @include('includes.file-uploader.upload',[
                'url'   =>  route('vendor.register.post_gallery'),
                'user'  =>  $user
            ])
        </div>

    </div>
@endsection
