@extends('auth.layouts') 
@section('main')
<div id="vendor-register">
	<customer-register 
	:countries="{{json_encode($countries)}}" 
	:cities="{{json_encode($cities)}}"></customer-register>
</div>
@endsection
