<template>
  <div id="app">
{{message}}
  </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>

    var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello world'
  },

mounted() {
    console.log('Component mounted.');
    }

})
</script>
