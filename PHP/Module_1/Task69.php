<?php

function foo (&$arr) {
    $arr[]= count($arr);
}
$arr = array (1,5,6,4,3,6);
foo ($arr);
print_r ($arr);
?>