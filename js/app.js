new Vue({
    el: "#app",
    data:
    {
        disks: [],
    },
    mounted() {
        axios.get("api/products.php")
            .then(resp => {
                this.disks = resp.data.dati;
            })
    }


})