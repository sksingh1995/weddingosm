<template>
	<div>
        <form v-if="showLoginForm" autocomplete="off" @submit.prevent="login" ref="form">
              <div class="access_social">
                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                    <a href="#0" class="social_bt google">Login with Google</a>
              </div>
              <div class="divider"><span>Or</span></div>
            
                 <div class="form-group" v-bind:class="{'has-error':errors.has('email')}">
                 <label>Email </label>
                 <input class="form-control" type="email" name="email" v-validate="'required|email'">
                 <i class="icon_mail_alt"></i>
                 <span class="help-block" v-show="errors.has('email')">{{ errors.first('email') }}</span>
               </div>

               <div class="form-group" v-bind:class="{'has-error':errors.has('password')}">
                 <label for="password" class="control-label">Password</label>
                 <input v-validate="'required'" type="password" class="form-control" id="password" name="password">
                 <i class="icon_lock_alt"></i>
                 <span class="help-block" v-show="errors.has('password')">{{ errors.first('password') }}</span>
               </div>

              <div class="clearfix add_bottom_30">
                <div class="checkboxes float-left">
                  <!-- <label class="container_check">Remember me
        	        <input type="checkbox">
                    <span class="checkmark"></span>
                  </label> -->
                </div>
                <div class="float-right mt-1">
                	<a @click.prevent="showLoginForm = !showLoginForm" class="btn">Forgot Password?</a>
            	</div>
              </div>
              <button class="btn_1 rounded full-width">Login to WeddingOSM</button>
              <div class="text-center add_top_10">New to WeddingOSM? 
              		<strong>
              			<a href="/customer/register">Sign up!</a>
              		</strong>
          		</div>
        </form>

        <form v-if="!showLoginForm" autocomplete="off" @submit.prevent="forgotPassword" ref="fpform">
         
                 <div class="form-group" v-bind:class="{'has-error':errors.has('email')}">
                 <label>Email </label>
                 <input class="form-control" type="email" name="email" v-validate="'required|email'">
                 <i class="icon_mail_alt"></i>
                 <span class="help-block" v-show="errors.has('email')">{{ errors.first('email') }}</span>
               </div>

              <div class="clearfix add_bottom_30">
                <div class="checkboxes float-left">
                </div>
                <div class="float-right mt-1">
                	<a @click.prevent="showLoginForm = !showLoginForm" class="btn">Go to Login</a>
            	</div>
              </div>
              <button class="btn_1 rounded full-width">Reset Password</button>
              <div class="text-center add_top_10">New to WeddingOSM? 
              		<strong>
              			<a href="/customer/register">Sign up!</a>
              		</strong>
          		</div>
        </form>
	</div>
</template>

<script>
      import eb from '../../app';// event bus

      export default {
            data() {
                return {
                	showLoginForm:true,// show login form
                	showFPForm:false,//show forgot password form
                };
              },
              methods: {
                login() {
                  this.$validator.validateAll().then(valid => {
                    if (valid) {
                      eb.$emit('loading',true);
                      let formdata = new FormData(this.$refs.form);
                      axios
                      .post("/login", formdata)
                      .then(res => {
                        eb.$emit('loading',false);
                        if(res.data.status == false){
                         this.$dialog.alert(res.data.error);
                       }else{
                        this.$refs.form.reset();
                    	window.location.href = '/';
                      }
                    })
                      .catch(error => {
                        eb.$emit('loading',false); 
                      });
                    }
                  });
                },

                forgotPassword(){
					this.$validator.validateAll().then(valid => {
                    if (valid) {
                      eb.$emit('loading',true);
                      let formdata = new FormData(this.$refs.fpform);
                      axios
                      .post("/send-reset-password-link", formdata)
                      .then(res => {
                        eb.$emit('loading',false);
                        if(res.data.status){
                        	this.$refs.fpform.reset();
	                        this.$dialog.alert(res.data.message).then(()	=>	{
	                        	window.location.href = '/';
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