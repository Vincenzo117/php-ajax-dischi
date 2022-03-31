const app = new Vue({
    el: '#app-container',
    data: {
        records: [],
        activeGenre: ''
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
        updateGenre() {
            console.log(this.activeGenre);
            axios
                .get(`http://localhost/php-ajax-dischi/milestone-2/server.php/?genre=${this.activeGenre}`)
                .then((response) => {
                    this.records = response.data;
                    console.log(this.records);
                })
                .catch((error) => {
                    console.warn(error.response);
                });
        }
    },
    created() {
        this.fetchRecords();
    }
});