
// imports
require("./bootstrap");
import VeeValidate from "vee-validate";
import { Validator } from 'vee-validate';
import VuejsDialog from "vuejs-dialog"

window.Vue = require("vue");
 
Vue.use(VuejsDialog,{
	html: true, 
    okText: 'OK',
    cancelText: 'Cancel',
    animation: 'bounce', 
});// dialog package

Vue.filter('uppercase', function (value) {
  return value.toUpperCase();
})

Vue.use(VeeValidate);// form validation package


Validator.extend('email_exists', require('./functions/validator').email_exists);

// register components
Vue.component(
  "vendor-register",
  require("./components/auth/VendorRegister.vue")
);

Vue.component(
  "customer-register",
  require("./components/auth/CustomerRegister.vue")
);

Vue.component(
  "login",
  require("./components/auth/Login.vue")
);

Vue.component(
  "reset-password",
  require("./components/auth/ResetPassword.vue")
);

Vue.component(
  "vendor-faq",
  require("./components/auth/VendorFAQ.vue")
);

Vue.component(
  "loader",
  require("./components/common/Loader.vue")
);

// export the event bus
const eb = new Vue();
export default eb;


// initialize the app
const app = new Vue({
  el: "#app"
});

