<?php
/*Функция аналог var_dump*/
$array = [
    1,
    2,
    [
        4,5,6
    ],
    4,
    5
];

function foo($arr)
{
    if(!is_array($arr)){
        echo gettype($arr) . ' => ' . $arr . "<br>";
        return;
    }

    foreach ($arr as $item){
        foo($item);
    }
}
foo ($array);
?>