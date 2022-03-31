const app = new Vue({
    el: '#app-container',
    data: {
        records: [],
    },
    methods: {
        fetchRecords() {
            axios
              .get("http://localhost/php-ajax-dischi/milestone-2/server.php")
              .then((response) => {
                this.records = response.data;
                console.log(this.records);
              })
              .catch((error) => {
                console.warn(error.response);
              });
          },
    },
    created() {
        this.fetchRecords();
    }
});