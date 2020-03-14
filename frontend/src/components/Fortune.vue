<template>
  <div id="fortune">
    <main>
      <div class="container mt-3">
        <div class="row" v-if="typeof fortune.text == 'undefined'">
          <div class="col-12">
            <button class="btn btn-success" 
                    @click="fetchFortune">
                  Crack open your cookie
            </button>
          </div>
          <div class="col-12 mt-3 mb-3">
            <img src="../assets/cookie-landing.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-12">
            A fortune cookie is a crisp cookie usually made from flour, sugar, vanilla, and sesame seed oil with apiece of paper inside, a "fortune", on which is an aphorism, or a vague prophecy
          </div>
        </div>
        <div class="row" v-else>
          <div class="col-12">
            <button class="btn btn-success" 
                    @click="fetchFortune">
                  Crack another one!
            </button>
          </div>
          <div class="col-12 border mt-3 mb-3">
            <img src="../assets/cookie.png" class="img-fluid" alt="Responsive image">
            <span class="alert alert-success">{{ fortune.text }}</span>
          </div>
          <div class="col-12">
            <textarea class="form-control" placeholder="Enter a new fortune here!" v-model="newFortune"></textarea>
            <button class="btn btn-success mt-1 float-right" 
                    @click="saveFortune">
                  save
            </button>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
export default {
  name: 'Fortune',
  data() {
    return {
      url_base: "http://127.0.0.1:8000/api/fortune", //laravel backend api url
      fortune: {},
      newFortune: null
    }
  },
  methods: {
    fetchFortune () {
      fetch(`${this.url_base}`)
        .then(res => {
          return res.json();
        }).then(this.setResults);
    },
    saveFortune () {
      if (this.newFortune) {
        fetch(`${this.url_base}/${this.fortune.id}`, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            text: this.newFortune
          })
        }).then(res => {
            this.newFortune = null;
            return res.json();
        }).then(this.reset);
      }
    },
    setResults (results) {
      this.fortune = results;
    },
    reset() {
      this.fortune = {};
    }
  }
};
</script>

<style scoped>

</style>
