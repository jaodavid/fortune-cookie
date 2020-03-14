<template>
  <div id="app">
    <nav class="navbar navbar-dark bg-primary mb-3">
      <a class="navbar-brand" href="/">Fortune Cookie</a>
    </nav>
    <h2>Fortune Cookie</h2>
    <Fortune/>
  </div>
</template>

<script>
import Fortune from './components/Fortune.vue'

export default {
  name: 'App',
  components: {
    Fortune
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
