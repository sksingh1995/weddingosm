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

        <div class="container-process">
            <ul class="list-unstyled multi-steps">
                <li>General Information
                </li>
                <li class="is-active">Frequently Asked Questions</li>
                <li>Photo gallery</li>

            </ul>
        </div>

        <div class="adminAlert adminAlert--info adminAlert--flex">
            <span class="adminAlert__icon adminAlert__icon--pencilNote mr10"></span>
            <div>
                <p class="adminAlert__title">Answer the FAQs for your category Farmhouse Weddings.</p>
                <p class="adminAlert__description">This information will appear on your profile. Your answers will provide couples with greater knowledge about the services you offer.</p>
            </div>
        </div>

        <form autocomplete="off" @submit.prevent="faqSubmit" ref="form" v-if="faqs.length">
            <div class="faq-list">

                <div class="faq-list-box" v-for="(faq, index) in faqs">
                    <h5><span>{{index + 1}}.</span> {{faq.question}} ?</h5>
                    <div class="row">
                        <input type="hidden" name="user_token" :value="user.token">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" v-if="faq.question_type == 'text'" :name="faq.id">
                                <input class="form-control" type="number" v-if="faq.question_type == 'number'" :name="faq.id">
                                <ul v-if="faq.question_type == 'radio'">
                                    <li v-for="radio_opt in faq.question_options">
                                        <label class="faq-cb-label">
                                            <input type="radio" class="faq-answer" :name="faq.id" :value="radio_opt">
                                            <span>{{radio_opt | uppercase}}</span>
                                        </label>
                                    </li>
                                </ul>

                                <ul v-if="faq.question_type == 'checkbox'">
                                    <li v-for="select_opt in faq.question_options">
                                        <label class="faq-cb-label">
                                            <input type="checkbox" class="faq-answer" :name="faq.id+'[]'" :value="select_opt">
                                            <span>{{select_opt | uppercase}}</span>
                                        </label>
                                    </li>
                                </ul>

                                <select v-if="faq.question_type == 'select'" :name="faq.id" class="form-control custom-select">
                                    <option value="">Choose</option>
                                    <option :value="select_opt" v-for="select_opt in faq.question_options">{{select_opt | uppercase}}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="pass-info" class="clearfix">By submitting this form, you agree to our <a href="">Terms and Conditions</a> </div>

                <button class="btn_1 rounded full-width">Save Your Details</button>

            </div>
        </form>
        <div v-if="faqs.length == 0" class="text-center">
            <h4 class="alert alert-warning">There is no question to ask.</h4>
            <p>
                <a :href="'/vendor/register/photo-gallery/'+user.token+'?no-faq=1'" class="btn_1 rounded full-width  ">Next</a>
            </p>
        </div>
    </div>

</div>
</template>

<script>
import eb from "../../app"; // event bus

export default {
  props: ["user", "faqs"],

  methods: {
    faqSubmit() {
      this.$validator.validateAll().then(valid => {
        if (valid) {
          eb.$emit("loading", true);
          let formdata = new FormData(this.$refs.form);
          axios
            .post("/vendor/register/post-faq", formdata)
            .then(res => {
              eb.$emit("loading", false);
              if (res.data.status == false) {
                this.$dialog.alert(res.data.error);
              } else {
                window.location.href =
                  "/vendor/register/photo-gallery/" + this.user.token;
              }
            })
            .catch(error => {
              eb.$emit("loading", false);
            });
        }
      });
    }
  }
};
</script>