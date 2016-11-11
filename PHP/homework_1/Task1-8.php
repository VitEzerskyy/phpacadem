<?php

$name = "Виталий";
$age = 20;
echo "Меня зовут: $name \n";
echo "Мне $age лет \n";

if ($age < 0 || (is_int($age) == false && is_float($age) == false)) {
echo "Неизвестный возраст";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
} elseif ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать";
}elseif ($age >= 0 && $age <= 17){
    echo "Вам еще рано работать";
}

?>

