import { createRouter, createWebHistory } from "vue-router";
import HomePage from "../views/Home.vue";
import ContactPage from "../views/Contact.vue";
import AboutPage from "../views/About.vue"; 
import ProductsPage from "../views/Products.vue";
import TechnologyPage from "../views/Technology.vue";
import PurchasePage from "../views/Purchase.vue";

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
  },
  {
    path: "/about",
    name: "AboutPage",
    component: AboutPage,
  },
  {
    path: "/products",
    name: "ProductsPage",
    component: ProductsPage,
  },
  {
    path: "/technology",
    name: "TechnologyPage",
    component: TechnologyPage,
  },
  {
    path: "/contact",
    name: "ContactPage",
    component: ContactPage,
  },
  {
    path: "/purchase",
    name: "PurchasePage",
    component: PurchasePage,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
