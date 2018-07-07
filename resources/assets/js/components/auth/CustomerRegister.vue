<template>
      <div>
            <form autocomplete="off" @submit.prevent="register" ref="form">

                <div class="form-group"  v-bind:class="{'has-error':errors.has('name')}">
                 <label>Full Name</label>
                 <input class="form-control" type="text" name="name" v-validate="'required|alpha_spaces|min:2'" data-vv-as="full name">
                 <i class="ti-user"></i>
                 <span class="help-block" v-show="errors.has('name')">{{ errors.first('name') }}</span>
               </div>
                  
                <div class="form-group" v-bind:class="{'has-error':errors.has('email')}">
                   <label>Email </label>
                   <input class="form-control" type="email" name="email" v-validate="'required|email|email_exists'" data-vv-validate-on="blur">
                   <i class="icon_mail_alt"></i>
                   <span class="help-block" v-show="errors.has('email')">{{ errors.first('email') }}</span>
                 </div>

                 <div class="form-group" v-bind:class="{'has-error':errors.has('phone')}">
                   <label>Phone Number </label>
                   <input class="form-control" type="text" name="phone" v-validate="'required|numeric|length:10'">
                   <i class=" icon_mobile "></i>
                   <span class="help-block" v-show="errors.has('phone')">{{ errors.first('phone') }}</span>
                 </div>

                 <div class="form-group" v-bind:class="{'has-error':errors.has('password')}">
                   <label for="password" class="control-label">Password</label>
                   <input v-validate="'required|min:8'" ref="password" type="password" class="form-control" id="password" name="password">
                   <i class="icon_lock_alt"></i>
                   <span class="help-block" v-show="errors.has('password')">{{ errors.first('password') }}</span>
                 </div>

                 <div class="form-group" v-bind:class="{'has-error':errors.has('confirm_password')}">
                   <label for="confirm_password" class="control-label">Confirm Password</label>
                   <input type="password" class="form-control" name="confirm_password" v-validate="'required|confirmed:password'" data-vv-as="confirm password">
                   <i class="icon_lock_alt"></i>
                   <span class="help-block" v-show="errors.has('confirm_password')">{{ errors.first('confirm_password') }}</span>
                 </div>
                  <div id="pass-info" class="clearfix"></div>
                  
                  <button :disabled="errors.all().length > 0" class="btn_1 rounded full-width">Register Now!</button>

                  <div class="text-center add_top_10">Already have an acccount? <strong><a href="/login">Sign In</a></strong></div>
            </form>
      </div>
</template>

<script>
      import eb from '../../app';// event bus

      export default {
            data() {
                return {};
              },
              methods: {
                register() {
                  this.$validator.validateAll().then(valid => {
                    if (valid) {
                      eb.$emit('loading',true);
                      let formdata = new FormData(this.$refs.form);
                      axios
                      .post("/customer/register", formdata)
                      .then(res => {
                        eb.$emit('loading',false);
                        if(res.data.status == false){
                         this.$dialog.alert(res.data.error);
                       }else{
                        this.$refs.form.reset();
                        this.$dialog.alert(res.data.message).then(()    =>    {
                              window.location.href = '/';
                        });
                      }
                    })
                      .catch(error => {
                        eb.$emit('loading',false); 
                      });
                    }
                  });
                }
              }
      }
</script>