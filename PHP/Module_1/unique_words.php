
/**
 * Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
 * Текст должен вводиться с формы.
 */

<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Task10.php" method="post">
    <textarea placeholder="Введите текст" name="area" cols="40" id="enter"/></textarea><br>
    <input type="submit"/>
</form>

<?php
function unique($str){
    //замена лишних символов в введенном тексте
    $str = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/u","",$str);
    echo "Введенная строка - ".$str."<br>";

    //приведение строки к нижнему регистру, на случай если будут слова в разных регистрах
    $str = mb_strtolower($str);
    $arr1 = explode(" ", $str);
    $arr2 = array ();

    foreach ($arr1 as $value) {
        if (in_array($value, $arr1) && !in_array($value, $arr2)){
            $arr2[] = $value;
        }
        array_shift($arr1);
    }
    $count = count($arr2);

    echo "Количество уникальных слов в тексте - ".$count;
}
unique($_POST['area']);
?>

</body>
</html>