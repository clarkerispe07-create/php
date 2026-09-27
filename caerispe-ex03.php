<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="caerispe-ex03.php" method="post">
        <label>The Factotial of:</label>
        <input type="text" name="factorial">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>
<?php

$input = $_POST["factorial"];

    function factorial($num){
        if($num<=1){
            return 1;
        }

        return $num * factorial($num - 1);
    }
    echo factorial($input);
   
?>
