import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router';
import SignIn from './components/userManage/signIn.vue'
import SignOut from './components/userManage/signOut'
import Register from './components/userManage/register';
import Nav from "./components/nav/navBar.vue";

import Category from "./components/categories/Category.vue";
import FindEvent from "./components/findevent/FindEvent.vue";
import AllEvent from "./components/allevent/Allevent.vue";

// ============ events card ===========
import EventView from "./components/myevent/eventView.vue";
import CardEvent from "./components/myevent/cardEvent.vue";
import CreateCard from "./components/myevent/createEvent.vue";

const app = createApp(App);
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {path: '/',component: EventView},
        {path: '/rigister',component: Register},
        {path: '/signIn',component: SignIn},
        {path: '/SignOut',component: SignOut},
        { path: '/nav', component: Nav},
        { path: '/myevent', component: CreateCard},
        { path: '/findEvent', component: FindEvent},
        { path: '/category', component: Category },
        { path: '/allevent', component: AllEvent },
    ]
})


app.component("event-card", CardEvent);
app.component('create-event', CreateCard);




app.use(router)
app.mount("#app");
