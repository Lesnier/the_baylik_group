/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import router from './app_dashboard_router.js';


var PageDashboard = require('./components/PageDashboard.vue').default;
var ComponentProfile = require('./components/ComponentProfile.vue').default;
var ComponentContractorList = require('./components/ComponentContractorList.vue').default;
var ComponentSellersList = require('./components/ComponentSellersList.vue').default;
var ComponentBuyerList = require('./components/ComponentBuyerList.vue').default;

const app_dashboard = new Vue({
    el: '#app_dashboard',
    components: {
        'page-dashboard': PageDashboard,
        'component-profile': ComponentProfile,
        'component-contractor-list': ComponentContractorList,
        'component-sellers-list': ComponentSellersList,
        'component-buyers-list': ComponentBuyerList
    },
    router
});
