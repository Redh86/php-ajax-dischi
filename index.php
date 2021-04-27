<?php
    include __DIR__ ."/partials/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <div class="media">
            <img class="pos" src="" alt="">
            <div class="hide">
                <h1> 
                    <?php 
                    for($i = 0; $i < count($database); $i++){
                        echo $database[$i]$album["title"];
                        };
                    ?></h1>
                <h3><?php?>ciao</h3>
                <h4><?php?>ciao</h4>
            </div>    
        </div>  
    </main>
</body>
</html>