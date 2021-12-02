import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router';
import Nav from "./components/nav/NavBar.vue";
import MyEvent from "./components/myevent/MyEvent.vue";
import FindEvent from "./components/findevent/FindEvent.vue";
import AllEvent from "./components/allevent/Allevent.vue";

// ============== category ==================
import cardCategory from "./components/categories/cardCategory";
import CategoryView from './components/categories/viewCategory';
import CategorySearch from "./components/categories/searchCategory.vue";
import CategoryForm from "./components/categories/categoryForm.vue";
const app = createApp(App);
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/myevent', component: MyEvent},
        { path: '/findEvent', component: FindEvent},
        { path: '/category', component: CategoryView },
        { path: '/allevent', component: AllEvent },
        { path: '/', component: AllEvent },
    ]
})
app.component('nav-bar', Nav)
app.component("search-category", CategorySearch);
app.component("category-card", cardCategory);
app.component("view-category",CategoryView);
app.component("category-form", CategoryForm)

app.use(router)
app.mount("#app");
