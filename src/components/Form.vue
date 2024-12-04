<template>
  <section id="form" class="container py-5">
    <form @submit.prevent="submitForm">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
          v-model="formData.name"
          type="text"
          class="form-control"
          id="name"
          placeholder="Your name"
          required
        />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          v-model="formData.email"
          type="email"
          class="form-control"
          id="email"
          placeholder="Your email"
          required
        />
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea
          v-model="formData.message"
          class="form-control"
          id="message"
          rows="3"
          placeholder="Your message"
          required
        ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>

    <div v-if="responseMessage" :class="{ 'text-success': isSuccess, 'text-danger': !isSuccess }" class="mt-3">
      {{ responseMessage }}
    </div>
  </section>
</template>

<script>
export default {
  name: "ContactForm",
  data() {
    return {
      formData: {
        name: "", // Поле для имени пользователя
        email: "", // Поле для email
        message: "", // Поле для сообщения
        formType: "contact", // Указываем тип формы
      },
      responseMessage: "", // Сообщение об ответе сервера
      isSuccess: false, // Флаг успешного выполнения
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await fetch("http://localhost:8081/form-handler.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json", // Указываем тип данных
          },
          body: JSON.stringify(this.formData), // Отправляем данные формы
        });

        const result = await response.json(); // Получаем результат в формате JSON

        if (result.success) {
          this.responseMessage = "Message sent successfully!"; // Успешное сообщение
          this.isSuccess = true;
          this.formData = { name: "", email: "", message: "", formType: "contact" }; // Сброс данных формы
        } else {
          this.responseMessage = result.error || "Error while sending."; // Сообщение об ошибке
          this.isSuccess = false;
        }
      } catch (error) {
        this.responseMessage = "Connection error with the server."; // Ошибка соединения
        this.isSuccess = false;
        console.error(error); // Логируем ошибку в консоль
      }
    },
  },
};
</script>

<style scoped>
#form {
  max-width: 600px; /* Устанавливаем максимальную ширину формы */
  margin: 0 auto; /* Центрируем форму */
}
.text-success {
  color: #28a745; /* Цвет для успешного сообщения */
}
.text-danger {
  color: #dc3545; /* Цвет для сообщения об ошибке */
}
</style>
