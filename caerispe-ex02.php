<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="caerispe-ex02.php" method="post">
        <label>The Factotial of:</label>
        <input type="text" name="factorial">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>
<?php
    $input = $_POST["factorial"];
    $factorial = 1;

   for($count = $input; $count>=1; $count--){
    $factorial = $factorial * $count;
   }
    echo $factorial;
   
?>
