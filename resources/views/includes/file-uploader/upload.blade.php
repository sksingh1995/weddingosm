@section('styles')
@parent

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

<style>
.dropzone{
	border: 2px dotted #ef4955;
	color: #ef4955;
	border-radius: 10px;
}

.dropzone .dz-message h2{
	color: #ef4955 !important;
}
</style>
@endsection

<form action="{{$url}}" class="dropzone" id="my-dropzone">
	{{csrf_field()}}
	<input type="hidden" name="user" value="{{$user->id}}">
</form>

<button class="btn_1 rounded full-width" id="upload-btn" style="display:none">Upload</button>

<button class="btn_1 rounded full-width" id="add-more" style="display:none">Upload More</button>

<a href="/" class="btn_1 rounded full-width" id="redirect" style="display:none">Done! Go to Dashboard</a>

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>

<script>

	Dropzone.options.myDropzone = {
		autoProcessQueue:false,
		paramName: "files",
		maxFilesize: 2,
		// clickable:['#add-more',true],
		dictMaxFilesExceeded:"This image will not be uploaded as you can upload maximum 10 images",
		acceptedFiles:'.jpg,.png,.jpeg',
		addRemoveLinks:true,
		dictDefaultMessage:`
		<h2>Click or Drop files here to upload</h2>
		<p>Only 10 files are allowed.</p>
		<small>First 10 files will be uploaded</small>
		`,
		maxFiles: 10,
		parallelUploads:10,
		uploadMultiple:true,
		init: function() {
			var uploadBtn = document.querySelector("#upload-btn"),
			redirect = document.querySelector("#redirect"),
			addMoreBtn = document.querySelector("#add-more"),
	        myDropzone = this; // closure

	        uploadBtn.addEventListener("click", function() {
		      myDropzone.processQueue(); // Tell Dropzone to process all queued files.
		  });

	        this.on("addedfile", function() {
	        	if(this.files.length < this.options.maxFiles){
	        		this.options.clickable = "#add-more";
	        		// addMoreBtn.style.display = 'block';
	        	}else{
	        		this.options.clickable = false;
	        		// addMoreBtn.style.display = 'none';
	        	}

	        	uploadBtn.style.display = 'block';
	        });

	        this.on("successmultiple", function(file,res) {
	        	if(res.status){
	        		redirect.style.display = 'block';
	        		uploadBtn.style.display = 'none';
	        	}else{
	        		alert("The Following error was occured:- \n"+res.error+"\nPlease try again.");
	        		this.removeAllFiles(true); 
	        	}
	        });
	    },
	};

	$("#redirect").on('click', function(e){
		$.ajax({
			url:"/gallery-upload-finish?token={{$user->token}}",
			type:"GET",
			success:function(res){
				window.location.href = '/';
			}
		});

		return false;
	});
</script>


@endsection