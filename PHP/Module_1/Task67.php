<?php

function foo ($arr, $bool = true) {
    if ($bool) {
        echo "<pre>";
        print_r ($arr);
        echo "<pre>";
    } else {
        echo "<pre>";
        var_dump ($arr);
        echo "<pre>";
    }
}
foo ([0,4,5,6,7],false);
?>