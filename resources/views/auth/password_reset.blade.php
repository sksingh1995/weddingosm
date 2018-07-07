@extends('auth.layouts') 
@section('main')
<div id="login_bg">
<div id="login">
      <aside>
            <figure>
                  <a href="/"><img src="/img/logo_sticky.png"  height="35" data-retina="true" alt="" class="logo_sticky"></a>
            </figure>

			<reset-password :token="'{{$token}}'"></reset-password>
      </aside>
</div>
</div>
@endsection