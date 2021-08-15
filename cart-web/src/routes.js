import Vue from 'vue'
import VueRouter from "vue-router";
import Home from "./pages/Home";
import Product from "./pages/Product";
Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    linkExactActiveClass: "active",
    routes: [
        {
            path: '/',
            name: 'home',
            component:Home
        },
        {
            path: '/product/:id',
            component: Product,
            name: 'product',
            props: true
        }
    ]
})
export default router