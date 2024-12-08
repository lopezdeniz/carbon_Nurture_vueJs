import { createApp } from "vue";
import App from "./App.vue";
import router from "./router"; // Подключение маршрутизатора
import "aos/dist/aos.css"; // Подключение стилей AOS
import AOS from "aos"; // Импорт AOS
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import { createHead } from "@vueuse/head"; // Импорт vueuse/head

// Создание экземпляра Vue приложения
const app = createApp(App);

// Создание экземпляра vueuse/head для управления <head>
const head = createHead();

// Инициализация AOS при монтировании приложения
app.mixin({
  mounted() {
    AOS.init({
      duration: 800, // Длительность анимации в миллисекундах
      easing: "ease-in-out", // Тип анимации
      once: true, // Запуск анимации только один раз
      mirror: false, // Не запускать анимацию при прокрутке назад
    });
  },
});

// Подключение маршрутизатора и vueuse/head
app.use(router).use(head).mount("#app");
