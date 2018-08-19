<form id="vendor-search-form">
  <div class="row no-gutters custom-search-input-2">
    <div class="col-lg-5">
      <div class="form-group">
        <select class="wide" name="service">
          <option value="">What are you looking for...</option>
          @include('includes.services_options')
        </select>
        <i class="icon_search"></i>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="form-group">
        <select class="wide" name="location">
          <option value="">Where</option>
          @include('includes.cities_options')
        </select>
        <i class="icon_pin_alt"></i>
      </div>
    </div>

    <div class="col-lg-2">
      <input type="submit" class="btn_search" value="Search">
    </div>
  </div>
  <!-- /row -->
</form>