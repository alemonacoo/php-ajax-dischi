console.log("js ok!");

const app = new Vue({
  el: "#app",
  data() {
    return {
      albums: [],
      filter: "",
    };
  },
  mounted() {
    console.log("VUE OK!");
    this.getAlbums("");
  },
  methods: {
    getAlbums(filter) {
      axios
        .get(`albums_api.php?filter=` + filter)
        .then((response) => {
          console.log(response);
          if (response.status == 200) {
            this.albums = response.data;
          }
        })
        .catch((e) => console.log(e));
      this.filter = "";
    },
  },
});
