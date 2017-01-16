
/**
Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета,
 * выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число.
 */

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