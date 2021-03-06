<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/master.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <div id="app" class="media">
                <div class="album" v-for="albums in album">
                    <img :src="albums.poster" alt=""> 
                    <h1>{{albums.title}}</h1>
                    <h2>{{albums.author}}</h2>
                    <h3>{{albums.year}}</h3>
                </div>     
        </div>  
    </main>
    <script src="js/main.js"></script>
</body>
</html>                       