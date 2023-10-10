import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
import ComponentProfile from './components/ComponentProfile.vue';
import ComponentContractorList from './components/ComponentContractorList.vue';
import ComponentSellersList from './components/ComponentSellersList.vue';
import ComponentBuyerList from './components/ComponentBuyerList.vue';


const routes = [
    {path: '/profile/:user', component: ComponentProfile, name:'profile', props:true},
    {path: '/contractors-list/:haspub', component: ComponentContractorList,name:'contractors', props:true},
    {path: '/sellers-list/:haspub', component: ComponentSellersList, name:'sellers', props:true},
    {path: '/buyers-list/:haspub', component: ComponentBuyerList, name:'buyers', props:true}
];

export default new VueRouter({
    routes,
});

