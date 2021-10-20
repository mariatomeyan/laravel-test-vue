import Vue from 'vue';
import VueRouter from 'vue-router';
import router from "./Router/index";
import store from "./Store/index"

Vue.use(VueRouter);

Vue.component('nav-bar', require('./Components/NavBar.vue').default);
Vue.component('logo', require('./Components/Logo.vue').default);
Vue.component('base-input', require('./Components/BaseInput.vue').default);
Vue.component('base-alert-info', require('./Components/BaseAlertInfo.vue').default);
Vue.component('base-button', require('./Components/BaseButton.vue').default);

let app = new Vue({
    el: '#app',
    router,
    store,
});
store.dispatch('auth/isAuthenticated')
