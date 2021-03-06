
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import vSelect from 'vue-select'
import VueRouter from 'vue-router'

Vue.use(BootstrapVue)
Vue.component('v-select', vSelect)

window.Vue = require('vue');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import router from './router'
//Vue.component('example-component', require('./components/ExampleComponent.vue'));
import options from './components/Options.vue'

var app = new Vue({
	el: '#app',
	router,
	components: { options },
	data: {
		
	}
});

