import { createRouter, createWebHistory } from "vue-router";
import HomePage from "../views/Home.vue";
import ContactPage from "../views/Contact.vue";

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
  },
  {
    path: "/contact",
    name: "ContactPage",
    component: ContactPage,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
