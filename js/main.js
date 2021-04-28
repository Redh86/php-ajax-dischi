var app = new Vue ({
    el: "#app",
    data : {
        album: [],
        
    },
    
    mounted() {

        axios.get('http://localhost/github/php-ajax-dischi/partials/server.php')
            .then((result) => {
                this.album = result.data;
                console.log(result);
                console.log(this.album);
        })    
    },
    
});