import Vue from "vue";
import Router from "vue-router";
import Index from "./views/Index.vue";
import Admin from "./views/Admin.vue";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      name: "index",
      component: Index
    },
    {
      path: "/admin",
      name: "admin",
      component: Admin
    },
    {
      path: "*",
      redirect: "/"
    }
  ]
});
