@extends('auth.layouts') 
@section('main')
<div id="vendor-register">
	<vendor-faq :user="{{json_encode($user->toArray())}}" :faqs="{{json_encode($user->vendorProfile->service->faqs->toArray())}}"></vendor-faq>
</div>
@endsection