<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="caerispe-ex04.php" method="post">
        <label>Number of patterns:</label>
        <input type="text" name="pattern">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>
<?php
    $input = $_POST["pattern"];

    for($i=1; $i<=$input; $i++){
        for($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
   
?>
