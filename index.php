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
            <div class="hide">
                <?php
                    foreach($database as $album){
                        //echo "<img src=".$title = $album["poster"]." alt="">"
                        echo "<h1>".$title = $album["title"]."</h1>";
                        echo "<h2>".$author = $album["author"]."</h2>";
                        echo "<h3>".$year = $album["year"]."</h3>";
                    };
                ?>
                
            </div>    
        </div>  
    </main>
</body>
</html>