<?php
$arr = array ();

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand (1,100);
}
print_r ($arr);
$result = 1;
foreach ($arr as $key => $value) {
    if (($key%2 == 0) && ($value > 0)) {
        $result *= $value;
    }
}
echo "Произведение элементов, которые больше 0 и у которых парные индексы = {$result}"."\n";
echo "Элементы, которые больше 0 и у которых не парный индекс:"."\n";
foreach ($arr as $key => $value) {
    if (($key%2 != 0) && ($value > 0)) {
        echo $value."\n";
    }
}

?>