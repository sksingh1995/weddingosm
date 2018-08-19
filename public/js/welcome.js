$(document).ready(function(){

	$("#vendor-search-form").on("submit", function(){

		var form = $(this),
		service = form.find('select[name="service"]').val(),
		location = form.find('select[name="location"]').val() || 'all';

		if(!service){
			window.location.href = base_url+"vendors";
		}else{
			window.location.href = base_url+"vendors/"+location+"/"+service;
		}

		return false;

	});

});