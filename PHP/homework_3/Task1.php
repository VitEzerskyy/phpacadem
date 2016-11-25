<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Task1.php" method="post">
    <textarea placeholder="Введите текст" name="area1" cols="40" id="enter"/></textarea><br>
    <textarea placeholder="Введите текст" name="area2" cols="40" id="enter2"/></textarea><br>
    <input type="submit"/>
</form>

<?php
function getCommonWords($a, $b){
    //замена лишних символов в введенном тексте
    $a = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/u","",$a);
    $b = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/u","",$b);
    echo "Первая строка - ".$a."<br>"."Вторая строка - ".$b."<br>";

    //приведение строки к нижнему регистру, на случай если будут слова в разных регистрах
    $a = mb_strtolower($a);
    $b = mb_strtolower($b);
    $arr1 = explode(" ", $a);
    $arr2 = explode(" ", $b);
    $result_arr = array();

    foreach ($arr1 as $value) {
            if (in_array($value, $arr1) && in_array($value, $arr2)){
                $result_arr[] = $value;
                    unset($arr2[array_search($value, $arr2)]);
            }
    }

    return $result_arr;
}
$arr3 = getCommonWords($_POST['area1'], $_POST['area2']);
$result_str = implode(" ", $arr3);
echo "Совпадения - ". $result_str;
?>

</body>
</html>