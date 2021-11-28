import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router';
import SignIn from './components/userManage/signIn.vue'
import SignOut from './components/userManage/signOut'
import Register from './components/userManage/register';
import Navbar from './components/nav/navBar.vue';

const app = createApp(App);
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {path: '/',component: Register},
        {path: '/rigister',component: Register},
        {path: '/signIn',component: SignIn},
        {path: '/SignOut',component: SignOut},
        {path: '/narbar', component:Navbar}
    ]
})
app.use(router);
app.mount('#app')