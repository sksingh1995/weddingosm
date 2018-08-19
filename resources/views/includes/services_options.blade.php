   @foreach(config(config('params.csc_cache').'.services') as $service)
   <option value="{{$service['url_name']}}" {{Request::segment(3,null) == $service['url_name'] ? 'selected' : ''}}>{{$service['sentence']}}</option>
   @endforeach