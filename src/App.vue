<template>
  <div id="app">
    <PageHeader />
    <main>
      <ContactForm />
    </main>
    <AppFooter />
  </div>
</template>

<script>
import PageHeader from "./components/Header.vue";
import ContactForm from "./components/Form.vue";
import AppFooter from "./components/Footer.vue";

export default {
  name: "App",
  components: {
    PageHeader,
    ContactForm,
    AppFooter,
  },
};
</script>

<style>
main {
  padding: 20px;
}
</style>
