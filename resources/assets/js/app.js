// imports
require("./bootstrap");
import VeeValidate from "vee-validate";

window.Vue = require("vue");

Vue.use(VeeValidate);

// components
Vue.component(
  "customer-register",
  require("./components/auth/CustomerRegister.vue")
);

const app = new Vue({
  el: "#app"
});
