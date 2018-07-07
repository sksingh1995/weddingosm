@extends('auth.layouts') 
@section('main')
<div id="vendor-register">
      <vendor-register 
      :services="{{json_encode($services)}}" 
      :countries="{{json_encode($countries)}}" 
      :cities="{{json_encode($cities)}}"></vendor-register>
</div>
@endsection
