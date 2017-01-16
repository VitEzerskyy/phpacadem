
/**
 * Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.
 */

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Task3.php" method="post">
    <label for="enter">Введите число N</label><Br>
    <input type="number" name="number" id="enter"/>
    <input type="submit"/>
</form>

<?php
function deleteWords ($n){

    $str = file_get_contents("words.txt");
    echo "Изначальная строка в файле - ". $str."<br>";
    $arr = explode(" ", $str);
    $count = count($arr);

    for ($i = 0; $i <= $count-1; $i ++) {
        if ((mb_strlen($arr[$i])) > $n) {
            unset($arr[$i]);
        }
    }

    return $arr;
}

$result_arr = deleteWords($_POST['number']);
$result_str = implode (" ", $result_arr);
file_put_contents("words.txt", $result_str);
echo "Результат: ";
readfile("words.txt");
?>
</body>
</html>