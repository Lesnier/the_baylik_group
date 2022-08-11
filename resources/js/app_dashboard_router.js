import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
import ComponentProfile from './components/ComponentProfile.vue';
import ComponentContractorList from './components/ComponentContractorList.vue';
import ComponentSellersList from './components/ComponentSellersList.vue';
import ComponentBuyerList from './components/ComponentBuyerList.vue';


const routes = [
    {path: '/profile/:user', component: ComponentProfile, name:'profile', props:true},
    {path: '/contractors-list', component: ComponentContractorList},
    {path: '/sellers-list', component: ComponentSellersList},
    {path: '/buyers-list', component: ComponentBuyerList}
];

export default new VueRouter({
    routes,
});

