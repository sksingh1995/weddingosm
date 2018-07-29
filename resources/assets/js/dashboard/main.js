
// imports
require("../bootstrap");
import VeeValidate from "vee-validate";
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


// Vue.component(
//   "loader",
//   require("./components/common/Loader.vue")
// );


// initialize the app
const app = new Vue({
  el: "#dashboard_app"
});

