@extends('auth.layouts') 
@section('main')
<div id="login">
      <aside>
            <figure>
                  <a href="/"><img src="/img/logo_sticky.png"   height="35" data-retina="true" alt="" class="logo_sticky"></a>
            </figure>
            <customer-register></customer-register>
            <div class="are-you-box"><a href="{{route('vendor.register')}}">Are you a vendor? <span><strong>  Sign Up</strong> </span></a></div>
            <div class="copy">© 2018 WeddingOSM</div>
      </aside>
</div>
@endsection