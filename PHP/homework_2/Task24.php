<?php

function countEntry ($number, $entry) {
   $counter = 0;
    $str =  strval($number);
    $count = strlen($str);
for ($i = 0; $i < $count; $i++) {
    if ($str[$i] == $entry) {
        $counter++;
    }
}
echo "Количество вхождений {$entry} в {$number} равно {$counter}";
}
countEntry (3106377633, 7);
?>