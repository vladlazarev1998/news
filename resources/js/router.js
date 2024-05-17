import {createRouter, createWebHistory} from "vue-router";
import Home from "./components/Pages/Home.vue";
import PostShow from "./components/Pages/PostShow.vue";


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/:slug',
        name: 'post.show',
        component: PostShow,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router
