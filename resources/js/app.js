import Vue from 'vue';

// Locales
import i18n from './locales';

// Router
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import routes from './routes';
const router = new VueRouter(routes);

// UI Framework
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);

import App from "./App.vue";
new Vue({
    el: '#app',
    components: { App },
    template: "<app />",
    i18n,
    router
});
