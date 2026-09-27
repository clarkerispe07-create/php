<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="caerispe-ex01.php" method="post">
        <label>Start Value:</label>
        <input type="text" name="start"><br>
        <label>End Value:</label>
        <input type="text" name="end"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    $start = $_POST["start"];
    $end = $_POST["end"];

    for($count = $start; $count<=$end; $count++){
        echo "$count <br>";
    }
?>