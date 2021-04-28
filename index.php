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
            <?php foreach($database as $album) {?>
                <div class="album">
                    <img src="<?php echo($album["poster"]) ?>" alt=""> 
                    <h1><?php echo($album["title"]) ?></h1>
                    <h2><?php echo($album["author"]) ?></h2>
                    <h3><?php echo($album["year"]) ?></h3>
                </div>  
            <?php }; ?>    
        </div>  
    </main>
</body>
</html>