require('./bootstrap');

window.Vue = require('vue');
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'

library.add(faUserSecret, fas, fab)
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.config.productionTip = false


Vue.component('example', require('./components/Example.vue'));
Vue.component('home', require('./components/HomeComponent.vue'));

const app = new Vue({
    el: '#app'
});