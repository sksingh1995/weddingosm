<template>
      <div>
              <div class="vendor-register-box">

            <figure style="text-align: center;">
                  <a href="/"><img src="/img/logo_sticky.png" height="35" data-retina="true" alt="" class="logo_sticky"></a>
                  <div class="vendor-register-welcome-text">
                        <h3>"Grow your Business with WeddingOSM"</h3>
                        <p>Sign Up to access your Dashboard</p>
                  </div>
            </figure>

            <form @submit.prevent="register" autocomplete="off" v-if="!registered" ref="form">
                  <div class="row">
                        <div class="col-sm-6">
                              <div class="form-group"  v-bind:class="{'has-error':errors.has('full_name')}">
                                    <label>Your Full Name</label>
                                    <input class="form-control" type="text" name="full_name" v-validate="'required|alpha|min:2'" data-vv-as="full name">
                                    <i class="ti-user"></i>
                                    <span class="help-block" v-show="errors.has('full_name')">{{ errors.first('full_name') }}</span>
                              </div>
                        </div>

                        <div class="col-sm-6">
                              <div class="form-group" v-bind:class="{'has-error':errors.has('user_type')}">
                                    <label>User Type</label>
                                    <select name="user_type" class="form-control" type="text" v-validate="'required'" data-vv-as="user type">
                                          <option value="">Select a user type</option>
                                          <option value="customer">Customer</option>
                                          <option value="vendor">Vendor</option>
                                    </select>
                                    <span class="help-block" v-show="errors.has('user_type')">{{ errors.first('user_type') }}</span>
                              </div>
                        </div>
                  </div>
                  
                  <div class="row">

                        <div class="col-sm-6">
                              <div class="form-group" v-bind:class="{'has-error':errors.has('email')}">
                                    <label>Email </label>
                                    <input class="form-control" type="email" name="email" v-validate="'required|email'">
                                    <i class="icon_mail_alt"></i>
                                      <span class="help-block" v-show="errors.has('email')">{{ errors.first('email') }}</span>
                              </div>
                        </div>

                        <div class="col-sm-6">
                              <div class="form-group" v-bind:class="{'has-error':errors.has('phone')}">
                                    <label>Phone Number </label>
                                    <input class="form-control" type="text" name="phone" v-validate="'required|numeric|length:10'">
                                    <i class=" icon_mobile "></i>
                                      <span class="help-block" v-show="errors.has('phone')">{{ errors.first('phone') }}</span>
                              </div>
                        </div>

                  </div>

                  <div class="row">
                        <div class="col-sm-6">
                              <div class="form-group" v-bind:class="{'has-error':errors.has('password')}">
 <label for="password" class="control-label">Password</label>
    <input v-validate="'required|min:8'" type="password" class="form-control" id="password" name="password" placeholder="New Password">
                                    <i class="icon_lock_alt"></i>
                                      <span class="help-block" v-show="errors.has('password')">{{ errors.first('password') }}</span>
                              </div>
                        </div>

                        <div class="col-sm-6">
                              <!-- <div class="form-group" v-bind:class="{'has-error':errors.has('confirm_password')}">
                                   <label for="confirm_password" class="control-label">Verify password</label>
    <input v-validate="'confirmed:password'" type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Verify password">
                                    <i class="icon_lock_alt"></i>
                                      <span class="help-block" v-show="errors.has('confirm_password')">{{ errors.first('confirm_password') }}</span>
                              </div> -->
                        </div>

                  </div>

                  <div id="pass-info" class="clearfix">By submitting this form, you agree to our <a href="">Terms and Conditions</a> </div>

                  <button type="submit" class="btn_1 rounded full-width">Register Now!</button>
                  <div class="text-center add_top_10">Already have an acccount? <strong><a href="/customer/login">Sign In</a></strong></div>

                  <div class="are-you-box"><a href="/customer/login">Are you a customer? <span><strong>  Sign In</strong> </span></a></div>
            </form>
            <div v-if="registered" class="thank-you-form-submit">

                  <img src="/img/thnkyou.png">
                  <h5>Thank you for sharing your information.</h5>
                  <p>An email with a verification link has been sent to your email address. </p>
                  <p>Please click on the link to verify your registered email address and log in to your account.</p>

                  <p>Also feel free to call us at <a>76-66-77-88-99</a> or write to us at <a>info@weddingosm.com</a> </p>

                  <a href="https://mail.google.com" target="_blank" style="text-decoration: underline;">Check Your Mail</a>
            </div>
      </div>

      </div>
</template>

<script>
export default {
  mounted() {
    console.log("mounted");
  },
  data() {
    return {
      registered: false
    };
  },
  methods: {
    register() {
      this.$validator.validateAll().then(valid => {
        if (valid) {
          let formdata = new FormData(this.$refs.form);
          axios
            .post("/vendor/register", formdata)
            .then(res => {
              this.registered = true;
              console.log(res);
            })
            .catch(error => {
              console.log(error);
            });
        }
      });
    }
  }
};
</script>

<style scoped>
.has-error input,
.has-error select,
.has-error textarea {
  border: 1px solid #ef4955;
}

.has-error .help-block,
.has-error label {
  color: #ef4955;
}
</style>
