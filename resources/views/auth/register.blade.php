@extends('auth.layouts') 
@section('main')
<div id="login">
      <aside>
            <figure>
                  <a href="/"><img src="/img/logo_sticky.png"   height="35" data-retina="true" alt="" class="logo_sticky"></a>
            </figure>
            <form autocomplete="off">
                  <div class="form-group">
                        <label>Your Name</label>
                        <input class="form-control" type="text">
                        <i class="ti-user"></i>
                  </div>
                  <div class="form-group">
                        <label>Your Last Name</label>
                        <input class="form-control" type="text">
                        <i class="ti-user"></i>
                  </div>
                  <div class="form-group">
                        <label>Your Email</label>
                        <input class="form-control" type="email">
                        <i class="icon_mail_alt"></i>
                  </div>
                  <div class="form-group">
                        <label>Your password</label>
                        <input class="form-control" type="password" id="password1">
                        <i class="icon_lock_alt"></i>
                  </div>
                  <div class="form-group">
                        <label>Confirm password</label>
                        <input class="form-control" type="password" id="password2">
                        <i class="icon_lock_alt"></i>
                  </div>
                  <div id="pass-info" class="clearfix"></div>
                  <a href="#0" class="btn_1 rounded full-width add_top_30">Register Now!</a>
                  <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{route('customer.login')}}">Sign In</a></strong></div>
            </form>

            <div class="are-you-box"><a href="{{route('vendor.register')}}">Are you a vendor? <span><strong>  Sign Up</strong> </span></a></div>


            <div class="copy">© 2018 WeddingOSM</div>
      </aside>
</div>
@endsection