<template>
  <section id="form" class="container py-5">
    <form @submit.prevent="submitForm">
      <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input
          v-model="formData.name"
          type="text"
          class="form-control"
          id="name"
          placeholder="Ваше имя"
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
          placeholder="Ваш email"
          required
        />
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Сообщение</label>
        <textarea
          v-model="formData.message"
          class="form-control"
          id="message"
          rows="3"
          placeholder="Ваше сообщение"
          required
        ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Отправить</button>
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
        name: "",
        email: "",
        message: "",
      },
      responseMessage: "",
      isSuccess: false,
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await fetch("http://localhost:8081/form-handler.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(this.formData),
        });

        const result = await response.json();

        if (result.success) {
          this.responseMessage = "Сообщение успешно отправлено!";
          this.isSuccess = true;
          this.formData = { name: "", email: "", message: "" }; // Сброс формы
        } else {
          this.responseMessage = result.error || "Ошибка при отправке.";
          this.isSuccess = false;
        }
      } catch (error) {
        this.responseMessage = "Ошибка соединения с сервером.";
        this.isSuccess = false;
        console.error(error);
      }
    },
  },
};
</script>

<style scoped>
#form {
  max-width: 600px;
  margin: 0 auto;
}
.text-success {
  color: #28a745;
}
.text-danger {
  color: #dc3545;
}
</style>
