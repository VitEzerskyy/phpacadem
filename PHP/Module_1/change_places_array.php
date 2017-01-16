<?php
/**
Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
 */

$arr = array ();

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand (0,20);
}
print_r ($arr);

$max = $arr[0];
$min = $arr[0];

for ($i = 0; $i < 10; $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
}
echo "Максимальное = {$max}"."\n";
echo "Минимальное = {$min}"."\n";

$key_max = array_search($max, $arr);
$key_min = array_search($min, $arr);

$arr[$key_max] = $min;
$arr[$key_min] = $max;

print_r ($arr);

?>