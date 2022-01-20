import { createWebHistory, createRouter } from "vue-router";
import Home from "@/views/Home.vue";
import About from "@/views/About.vue";
import Jmol from "@/views/Jmol.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/about",
    name: "About",
    component: About,
  },
  {
    path: "/jmol",
    name: "Jmol",
    component: Jmol,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
