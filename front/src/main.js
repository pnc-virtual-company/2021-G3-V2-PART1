import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router';
import SignIn from './components/userManage/signIn.vue'
import SignOut from './components/userManage/signOut'
import Register from './components/userManage/register';
import Navbar from './components/nav/navBar.vue';
import Nav from "./components/nav/NavBar.vue";
import MyEvent from "./components/myevent/MyEvent.vue";
import Category from "./components/categories/Category.vue";
import FindEvent from "./components/findevent/FindEvent.vue";
import AllEvent from "./components/allevent/Allevent.vue";
const app = createApp(App);
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {path: '/',component: Register},
        {path: '/rigister',component: Register},
        {path: '/signIn',component: SignIn},
        {path: '/SignOut',component: SignOut},
        {path: '/narbar', component:Navbar},
        { path: '/nav', component: Nav},
        { path: '/myevent', component: MyEvent},
        { path: '/findEvent', component: FindEvent},
        { path: '/category', component: Category },
        { path: '/allevent', component: AllEvent },
    ]
})







app.use(router)
app.mount("#app");
