var app = new Vue({
    el: '#app',
    data: {
      BoxArr: []
    },
    methods: {
        getDischi(){
            axios.get('http://localhost:8888/database.php')
                .then((response) => {
                    this.BoxArr = response.data;
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    },
    created() {
        this.getDischi();
    }
  })