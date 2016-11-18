<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="Task23.php" method="post">
    <label for="enter">Введите число</label><Br>
    <input type="number" name="number" id="enter"/>
    <input type="submit"/>
</form>

<?php
$result = 0;
$str = implode("", $_POST);
$count = strlen($str);

for ($i = 0; $i < $count; $i++) {
    $result += $str[$i];
}

echo "Сумма введенных цифр равна {$result}";

?>
</body>
</html>