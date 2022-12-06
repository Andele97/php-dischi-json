const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      albums: []
    }
  },
  methods: {
    getApi(){
      axios.get(this.apiUrl).then(res =>{
        this.albums = res.data;
      })
    }
  }
}).mount('#app');