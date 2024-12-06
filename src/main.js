import { createApp } from "vue";
import App from "./App.vue";
import router from "./router"; // Подключение маршрутизатора
import "aos/dist/aos.css"; // Подключение стилей AOS
import AOS from "aos"; // Импорт AOS

const app = createApp(App);

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

app.use(router).mount("#app");
