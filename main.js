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
      axios.get(this.apiUrl).then((result) =>{
        this.albums = result.data;
      });
    }
  },
}).mount('#app');