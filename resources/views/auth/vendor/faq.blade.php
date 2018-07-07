@extends('auth.layouts') 
@section('main')
	<div id="vendor-register">
		<vendor-faq :user="{{json_encode($user->toArray())}}"></vendor-faq>
	</div>
@endsection
