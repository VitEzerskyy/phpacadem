<?php
$result = "";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arr as $value) {
    $result .= "{$value}";
}
var_dump ($result);
?>