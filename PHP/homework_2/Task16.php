<?php

$arr = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value){
    if ($value == 3 || $value == 6 || $value == 9) {
        echo $value."\n";
    } else {
        echo $value.",";
    }
}

?>