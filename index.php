<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/app.css">
    <title>Document</title>
</head>
<body>
<?php    
//parte collegamento a database!
require_once __DIR__ . '/database/database.php';
?>



<div class="container">
    <?php 
    foreach($albums as $Value){
        ?>
        <div class="album">
            <div class="img">
            <img src="<?php echo $Value["images"]?>" alt="">
            </div>
            <div class="titolo">
            <h3><?php echo $Value["title"]?></h3>
            </div>
            <div class="artista">
            <p><?php  echo $Value["artist"]?> </p>
            </div>
            <div class="date">
            <p> <?php echo $Value["date"] ?></p>
            </div>
    
        
        </div>
    <?php  
        }
    ?>
</div>







    




</body>
</html>