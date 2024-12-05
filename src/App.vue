<template>
  <div id="app">
    <PageHeader />
    <main>
      <router-view /> <!-- Слот для маршрутов -->
    </main>
    <AppFooter />
  </div>
</template>

<script>
import PageHeader from "./components/Header.vue";
import AppFooter from "./components/Footer.vue";

export default {
  name: "App",
  components: {
    PageHeader,
    AppFooter,
  },
};
</script>

<style>
main {
  padding: 20px;
}
</style>
