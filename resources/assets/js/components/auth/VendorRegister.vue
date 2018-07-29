<template>
 <div>
   <div id="vendor-register">
    <div class="vendor-register-box">
     <figure style="text-align: center;">
      <a href="/"><img src="/img/logo_sticky.png" height="35" data-retina="true" alt="LOGO" class="logo_sticky"></a>
      <div class="vendor-register-welcome-text">
       <h3>"Grow your Business with WeddingOSM"</h3>
       <p>Sign Up to access your Dashboard</p>
     </div>
   </figure>
   <div class="container-process">
    <ul class="list-unstyled multi-steps">
     <li class="is-active">General Information</li>
     <li>Frequently Asked Questions</li>
     <li>Photo gallery</li>
   </ul>
 </div>
 <form autocomplete="off" @submit.prevent="register" v-if="!registered" ref="form">

  <div class="row">
   <div class="col-sm-6">
     <div class="form-group"  v-bind:class="{'has-error':errors.has('bn')}">
       <label>Business Name</label>
       <input class="form-control" type="text" name="bn" v-validate="'required|alpha_spaces|min:2'" data-vv-as="business name">
       <i class="icon_toolbox_alt"></i>
       <span class="help-block" v-show="errors.has('bn')">{{ errors.first('bn') }}</span>
     </div>
   </div>
   <div class="col-sm-6">
    <div class="form-group"  v-bind:class="{'has-error':errors.has('name')}">
     <label>Your Full Name</label>
     <input class="form-control" type="text" name="name" v-validate="'required|alpha_spaces|min:2'" data-vv-as="full name">
     <i class="ti-user"></i>
     <span class="help-block" v-show="errors.has('name')">{{ errors.first('name') }}</span>
   </div>
 </div>
</div>

<div class="row">

 <div class="col-sm-6">
  <div class="form-group" v-bind:class="{'has-error':errors.has('country')}">
    <label>Country</label>
    <select class="form-control custom-select" name="country"  v-validate="'required'">
      <option value="">Select your country</option>
      <option v-for="country in countries" :value="country.id">{{country.name | uppercase}}</option>
    </select>
    <span class="help-block"  v-show="errors.has('country')">Please select your country</span>
  </div>
</div>


 <div class="col-sm-6">
  <div class="form-group" v-bind:class="{'has-error':errors.has('city')}">
    <label>City</label>
    <select class="form-control custom-select" name="city"  v-validate="'required'">
      <option value="">Select your city</option>
      <option v-for="city in cities" :value="city.id">{{city.name | uppercase}}</option>
    </select>
    <span class="help-block"  v-show="errors.has('city')">Please select your city</span>
  </div>
</div>
</div>

<div class="row">
  <div class="col-sm-12">

  <div class="form-group" v-bind:class="{'has-error':errors.has('service')}">
   <label>Service You Provide</label>
   <select class="form-control custom-select" name="service"  v-validate="'required'">
    <option value="">Services</option>
    <option v-for="service in services" :value="service.id">{{service.name  | uppercase}}</option>
  </select>
  <span class="help-block"  v-show="errors.has('service')">Please select a service</span>
</div>
</div>
</div>


<div class="row">
 <div class="col-sm-6">
  <div class="form-group" v-bind:class="{'has-error':errors.has('email')}">
   <label>Email </label>
   <input class="form-control" type="email" name="email" v-validate="'required|email|email_exists'" data-vv-validate-on="blur">
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
   <input v-validate="'required|min:8'" ref="password" type="password" class="form-control" id="password" name="password">
   <i class="icon_lock_alt"></i>
   <span class="help-block" v-show="errors.has('password')">{{ errors.first('password') }}</span>
 </div>
</div>
<div class="col-sm-6">
  <div class="form-group" v-bind:class="{'has-error':errors.has('confirm_password')}">
   <label class="control-label">Confirm Password</label>
   <input type="password" class="form-control" name="confirm_password" v-validate="'required|confirmed:password'" data-vv-as="confirm password">
   <i class="icon_lock_alt"></i>
   <span class="help-block" v-show="errors.has('confirm_password')">{{ errors.first('confirm_password') }}</span>
 </div>
</div>
</div>
<div class="row">
 <div class="col-sm-12">
  <label>About Your Business</label>
  <textarea class="form-control" name="bd" style="min-height: 100px;"></textarea>
</div>
</div>
<div id="pass-info" class="clearfix">By submitting this form, you agree to our <a href="">Terms and Conditions</a> </div>

<button :disabled="errors.all().length > 0" class="btn_1 rounded full-width">Register Now!</button>

<div class="text-center add_top_10">Already have an acccount? 
  <strong><a href="/login">Sign In</a></strong>
</div>

<div class="are-you-box">
  <a href="">Are you a customer? 
    <span><strong>Sign In</strong></span>
  </a>
</div>
</form>

<div class="thank-you-form-submit" v-if="registered">
  <img src="/img/thnkyou.png">
  <h5>Thank you for sharing your information.</h5>
  <p>An email with a verification link has been sent to your email address. </p>
  <p>Please click on the link to verify your registered email address and log in to your account.</p>
  <p>Also feel free to call us at <a>76-66-77-88-99</a> or write to us at <a>info@weddingosm.com</a> </p>
</div>
<!--<div class="copy">© 2018 WeddingOSM</div>-->
</div>
</div>
</div>
</template>

<script>
import eb from '../../app';// event bus

export default {
  props:['services','cities','countries'],

  data() {
    return {
      registered: false,
    };
  },
  methods: {
    register() {
      this.$validator.validateAll().then(valid => {
        if (valid) {
          eb.$emit('loading',true);
          let formdata = new FormData(this.$refs.form);
          axios
          .post("/vendor/register", formdata)
          .then(res => {
            eb.$emit('loading',false);
            if(res.data.status == false){
             this.$dialog.alert(res.data.error);
           }else{
            this.registered = true;
          }
        })
          .catch(error => {
            eb.$emit('loading',false); 
          });
        }
      });
    }
  }
};
</script>