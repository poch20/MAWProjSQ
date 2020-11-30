
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue')
import moment from 'moment'
import { Form, HasError, AlertError } from 'vform'

// import Gate from './Gate'
// Vue.prototype.$gate = new Gate(window.user)

// https://sweetalert2.github.io/ Functionality Library
import Swal from 'sweetalert2'
window.Swal = Swal
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast = Toast
// https://sweetalert2.github.io/ Functionality Library
window.Spanish = Form
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('pagination', require('laravel-vue-pagination'));


Vue.filter('globalVueFilterHelper-Momentjs', function(created){
  //return created.moment().format('MMMM DO YYYY') wrong
  return moment(created).format('MMMM Do YYYY')
})


window.sendHTTPReqAfterEvryActionIsDone  = new Vue()

import Router from 'vue-router'

Vue.use(Router)

import vueProgressBar from 'vue-progressbar'
Vue.use(vueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '3px',
})

let routes = [
  { path: '/dashboard', component: require('./components/Dashboard.vue').default },
  { path: '/developer', component: require('./components/Developer.vue').default },
  { path: '/users', component: require('./components/Users.vue').default },
  { path: '/profile', component: require('./components/Profile.vue').default },
  { path: '/invoice-credentials', component: require('./components/InvoiceCredentials.vue').default },
  { path: '/employee-profile', component: require('./components/EmployeeProfile.vue').default },
  { path: '/file-uploads', component: require('./components/FileUser.vue').default },

]

const router = new Router({
  mode: 'history',
  routes
})


Vue.filter('globalVueFilterHelper', function(text) {
  return text.charAt(0).toUpperCase() + text.slice(1)
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#mast-layout-blade-php-ref-vue',
    router,
    data:{
      searchVue:'',
    },
    methods:{
      // buttonSubmitPrevent()_.debounce( () => {
      //   sendHTTPReqAfterEvryActionIsDone.$emit('LISTEN TO ME ONLY!! THIS IS A KEYWORD')
      // }, 1000)
      buttonSubmitPrevent:_.debounce( () => {
        sendHTTPReqAfterEvryActionIsDone.$emit('LISTEN TO ME ONLY!! THIS IS A KEYWORD')
      },1000)


    },
})
