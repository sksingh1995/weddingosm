@foreach(config(config('params.csc_cache').'.cities') as $city)
<option value="{{$city['url_name']}}" {{Request::segment(2,null) == $city['url_name'] ? 'selected' : ''}}>{{$city['sentence']}}</option>
@endforeach