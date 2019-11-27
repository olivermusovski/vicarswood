import Vue from 'vue'
import VueRouter from 'vue-router'

//import PartRequestForm from './components/PartRequestForm.vue';
//import ServiceRequestForm from './components/ServiceRequestForm.vue';
//import ServiceRequestFormNew from './components/ServiceRequestFormNew.vue'
//import ServiceTicketForm from './components/ServiceTicketForm.vue';
//import Games from './components/Games.vue';


Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {
          path: '/cart',
          name: 'cart'
        },
    ]
});
