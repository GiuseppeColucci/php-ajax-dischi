<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
//parte collegamento a database!
require_once __DIR__ . '/database/database.php';
?>

<?php    
foreach($albums as $Value){
echo $Value["images"];
echo $Value["title"]; 
echo $Value["artist"];
echo $Value["date"];

}
?> 


    




</body>
</html>