import { createApp } from "vue";
import App from "./App.vue";
import router from "./router"; // Подключение маршрутизатора

import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import { createHead } from "@vueuse/head"; // Импорт vueuse/head

// Создание экземпляра Vue приложения
const app = createApp(App);

// Создание экземпляра vueuse/head для управления <head>
const head = createHead();



// Подключение маршрутизатора и vueuse/head
app.use(router).use(head).mount("#app");
