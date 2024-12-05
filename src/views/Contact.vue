<template>
    <section id="contact" class="container py-5">
      <h1>Contact Us</h1>
      <ContactForm />
    </section>
  </template>
  
  <script>
  import ContactForm from "../components/Form.vue";
  
  export default {
    name: "ContactPage",
    components: {
      ContactForm,
    },
  };
  </script>
  
  <style scoped>
  #contact {
    max-width: 600px;
    margin: 0 auto;
  }
  </style>
  