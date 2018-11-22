
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
//or window.Vue = Vue;

import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router';
import router from './routes';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(Vuetify)
Vue.use(VueRouter)

Vue.config.productionTip = false;


//Vue.component('mainheader', require('./components/Mainheader.vue'));
//Vue.component('mainfooter', require('./components/Mainfooter.vue'));
Vue.component('popup', require('./components/Popup.vue'));


Vue.filter('lowercase', function (value) {
	return value.toLowerCase()
})

const app = new Vue({
    el: '#app',
    router,
   // template: '<router-view></router-view>'
});