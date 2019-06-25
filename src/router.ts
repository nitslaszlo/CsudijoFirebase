import Vue from "vue";
import Router from "vue-router";
import Demo from "./views/Index.vue";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      name: "index",
      component: Demo
    },
    {
      path: "/admin",
      name: "admin",
      component: () => import("./views/Admin.vue")
    },
    {
      path: "*",
      redirect: "/"
    }
  ]
});
