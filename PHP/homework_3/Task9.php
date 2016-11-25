<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Task9.php" method="post" accept-charset="utf-8">
    <input type="text" placeholder="Введите текст" name="area1" id="enter"/></textarea><br>
    <input type="submit"/>
</form>

<?php
function reverse($str){

    echo "Введенная строка - ".$str."<br>";

    $result_str = "";

    for ($i = mb_strlen($str, "UTF-8")-1; $i >= 0; $i --) {
        $result_str .= mb_substr($str, $i, 1, "UTF-8");
        // к такой манипуляции пришлось прибегнуть,
        // т.к. текст в кириллице не отображался корректно
    }
    echo "Результат - ".$result_str."<br>";
}
reverse($_POST['area1']);
?>

</body>
</html>