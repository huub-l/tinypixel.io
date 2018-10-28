import Vue from 'vue'
import 'fullpage.js/vendors/scrolloverflow' // Optional. When using scrollOverflow:true
import VueFullPage from 'vue-fullpage.js'

export default {
  init() {
    Vue.use(VueFullPage)
    new Vue({
      el: "#app",
      components: {
        VueFullPage,
      },
      data() {
        return {
          options: {
            sectionsColor: ['#41b883', '#ff5f45', '#0798ec'],
          },
        }
      },
    })
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
