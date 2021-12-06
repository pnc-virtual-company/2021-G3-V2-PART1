import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router';
import SignIn from './components/userManage/signIn.vue'
import SignOut from './components/userManage/signOut'
import Register from './components/userManage/register';
import Nav from "./components/nav/navBar.vue";
import MyEvent from "./components/myevent/MyEvent.vue";
// import Category from "./components/categories/Category.vue";
import FindEvent from "./components/findevent/FindEvent.vue";
import AllEvent from "./components/allevent/Allevent.vue";

// ============== category ==================
// import category
import cardCategory from "./components/categories/cardCategory.vue";
import CategoryView from './components/categories/viewCategory';
import CategorySearch from "./components/categories/formUpdate.vue";
import CategoryForm from "./components/categories/categoryForm.vue";

const app = createApp(App);
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {path: '/',component: Register},
        {path: '/rigister',component: Register},
        {path: '/signIn',component: SignIn},
        {path: '/SignOut',component: SignOut},
        { path: '/nav', component: Nav},
        { path: '/myevent', component: MyEvent},
        { path: '/findEvent', component: FindEvent},
        { path: '/category', component: CategoryView },
        { path: '/allevent', component: AllEvent },
        // { path: '/', component: AllEvent },
    ]
})

// import MyEvent from "./components/myevent/MyEvent.vue";
// import FindEvent from "./components/findevent/FindEvent.vue";
// import AllEvent from "./components/allevent/Allevent.vue";



// ============== event ==================
// import event 
// const app = createApp(App);
// const router = createRouter({
//     history: createWebHistory(),
//     routes: [
//         { path: '/myevent', component: MyEvent},
//         { path: '/findEvent', component: FindEvent},
//         { path: '/category', component: CategoryView },
//         { path: '/allevent', component: AllEvent },
//         { path: '/', component: AllEvent },
//     ]
// })
app.component('nav-bar', Nav)
// app category 
app.component("update-category", CategorySearch);
app.component("category-card", cardCategory);
app.component("view-category",CategoryView);
app.component("category-form", CategoryForm);

// app myevent 

app.use(router)
app.mount("#app");
