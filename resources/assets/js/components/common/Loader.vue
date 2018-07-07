<template>
   <div v-if="loading">
   		<div class="preloader">
        	<div data-loader="loader"></div>
   		</div>
    </div>
</template>

<script>

	import eb from '../../app';// event bus
	
	export default {
		mounted(){
			let loader = this;
		 	eb.$on('loading', function (state) {
		  		loader.loading = state;  	  
		    });
		},

		data(){
			return {
				loading:false
			}
		}
	}
</script>