<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <?php
    $row = 6;
    $cols = 5;
    $colors = array('red','yellow','blue','gray','maroon','brown','green');

    for ($i=1; $i<=$row; $i++) {
        echo "<tr>";
        for ($j=1; $j<=$cols; $j++) {
            echo "<td bgcolor='".$colors[rand(0,6)]."'>".rand()."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>


</body>
</html>