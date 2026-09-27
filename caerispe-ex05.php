<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td {
            width: 30px;
            height: 30px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
    <form action="caerispe-ex05.php" method="post">
        <label>Nubers of row:</label>
        <input type="text" name="row">
         <label>Nubers of column:</label>
        <input type="text" name="column">
        <input type="submit" value="submit"><br><br><br>

        <table width="400px" border="1" style="border-collapse: collapse;">
                
                <?php
                    $row = $_POST["row"];
                    $col =  $_POST["column"];

                    for($i = 1; $i<=$row; $i++){
                        echo "<tr>";
                        for($j = 1; $j<=$col; $j++){
                            if(($i + $j) % 2 == 0){
                                echo "<td class='white'></td>";
                            }else {
                                echo "<td class='black'></td>";
                            }      
                        }
                        echo "</tr>";
                    }
                ?>
        </table>


    </form>
    
</body>
</html>
