
require('./bootstrap');

window.Vue = require('vue');
import {routes} from './routes';
import {filter} from './filter'

//Vue Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

const router = new VueRouter({
    routes,
    mode:'hash'
})

//vuex
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from './store/index'

const store = new Vuex.Store(
    storeData
);
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-view', require('./components/Admin-main').default);
Vue.component('home', require('./components/admin/AdminHome.vue').default);
Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);

//v-form
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


// Sweet alert 2
import Swal from 'sweetalert2'
window.Swal = Swal;
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.toast = toast


const app = new Vue({
    el: '#app',
    router,
    store
});
