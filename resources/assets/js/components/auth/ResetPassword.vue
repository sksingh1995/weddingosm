<template>
	<div>
        <form autocomplete="off" @submit.prevent="resetPassword" ref="form">

               <div class="form-group" v-bind:class="{'has-error':errors.has('password')}">
                 <label for="password" class="control-label">Password</label>
                 <input type="password" name="password" v-validate="'required|min:8'" ref="password" class="form-control">
                 <i class="icon_lock_alt"></i>
                 <span class="help-block" v-show="errors.has('password')">{{ errors.first('password') }}</span>
               </div>

                 <input type="hidden" name="token" :value="token">

                <div class="form-group" v-bind:class="{'has-error':errors.has('cnf_password')}">
                 <label class="control-label">Confirm Password</label>

                 <input name="cnf_password" type="password" class="form-control" v-validate="'required|confirmed:password'" data-vv-as="confirm password">
                 <i class="icon_lock_alt"></i>
                 <span class="help-block" v-show="errors.has('cnf_password')">{{ errors.first('cnf_password') }}</span>
               </div>
              <button class="btn_1 rounded full-width">Reset</button>
        </form>
	</div>
</template>

<script>
      import eb from '../../app';// event bus

      export default {
            props:['token'],

              methods: {
                resetPassword(){
          					this.$validator.validateAll().then(valid => {
                    if (valid) {
                      eb.$emit('loading',true);
                      let formdata = new FormData(this.$refs.form);
                      axios
                      .post("/reset-password", formdata)
                      .then(res => {
                        eb.$emit('loading',false);
                        if(res.data.status){
                        	this.$refs.form.reset();
	                        this.$dialog.alert(res.data.message).then(()	=>	{
	                        	window.location.href = '/login';
	                        });
                        }else{
                        	this.$dialog.alert(res.data.error);
                        }
                    })
                      .catch(error => {
                        eb.$emit('loading',false); 
                      });
                    }
                  });
                },
              }
      }
</script>