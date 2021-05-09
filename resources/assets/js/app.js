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



Vue.component('logo-component', require('./components/LogoComponent.vue').default);
Vue.component('menu-component', require('./components/MenuComponent.vue').default);
Vue.component('home-component', require('./components/HomeComponent.vue'));

const app = new Vue({
    el: '#app'
});