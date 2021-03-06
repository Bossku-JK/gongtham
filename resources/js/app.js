/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from 'axios';
window.Vue = require('vue');
import Vue from 'vue';
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI, { locale })
import BootstrapVue from 'bootstrap-vue'
import VueSweetalert2 from 'vue-sweetalert2';
axios.defaults.baseURL = `${process.env.MIX_APP_URL}`
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);
Vue.use(BootstrapVue)
// app.js
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'vue-search-select/dist/VueSearchSelect.css'
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('sheetindex', require('./components/indexsheet.vue').default);
Vue.component('sheetshow', require('./components/showsheet.vue').default);
Vue.component('shoolinfo', require('./components/CreateInfoshool.vue').default);

/**
 *
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
