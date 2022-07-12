new Vue({
    el: "#app",
    data:
    {
        disks: [],
        genres: [],
        genreSelected: "",
    },
    computed:{
        getDisksFiltered(){
           
                return this.disks.filter((el)=>{
                    return el.genre.includes(this.genreSelected);
                })
            
        }
    },
    mounted() {
        axios.get("api/products.php")
            .then(resp => {
                this.disks = resp.data.dati;
                this.disksGenresFiltered();
            })
    },
    methods:{
        disksGenresFiltered(){
            this.disks.forEach(element => {
                if(!(this.genres.includes(element.genre))){
                    this.genres.push(element.genre);
                }
            });
        }
    }


})