<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Task2.php" method="post">
    <textarea placeholder="Введите текст" name="area1" cols="40" id="enter"/></textarea><br>
    <input type="submit"/>
</form>

<?php
function top3words($a){
    //замена лишних символов в введенном тексте
    $a = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/u","",$a);
    echo "Введенная строка - ".$a."<br>";

    $arr1 = explode(" ", $a);

    function cmp($a, $b)
    {
        if (strlen($a) == strlen($b)) {
            return 0;
        }
        return (strlen($a) > strlen($b)) ? -1 : 1;
    }

    usort($arr1, "cmp");
    $result = array_slice($arr1, 0, 3);
    $result_str = implode(", ", $result);
    echo "ТОП3 длинных слов в тексте - ".$result_str;
}
top3words($_POST['area1']);
?>

</body>
</html>