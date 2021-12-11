import { createRouter, createWebHistory } from 'vue-router';


import SignIn from '../components/userManage/signIn.vue';
import SignOut from '../components/userManage/signOut'
import Register from '../components/userManage/register';
import MyEvent from "../components/myevent/MyEvent.vue";
import FindEvent from "../components/findevent/FindEvent.vue";
import AllEvent from "../components/allevent/Allevent.vue";

// ============== category ==================
// import category
import CategoryView from '../components/categories/viewCategory.vue';

const routes = [
    {path: '/',component: SignIn},
    {path: '/rigister',component: Register},
    {path: '/signIn',component: SignIn},
    {path: '/SignOut',component: SignOut},
    { path: '/myevent', component: MyEvent},
    { path: '/findEvent', component: FindEvent},
    { path: '/category', component: CategoryView },
    { path: '/allevent', component: AllEvent },   
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;