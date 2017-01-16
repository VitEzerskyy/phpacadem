<?php
echo "<pre>";
$arr = [5, '5', 1, 2, 4, 6, 5, '6', '2', 3, 10];

var_dump(array_unique($arr));

function my_array_unique($arr)
{
    $new_array = [];

    foreach ($arr as $value){
        foreach ($new_array as $new_value){
            if($new_value == $value){
                continue 2;
            }
        }

        $new_array[] = $value;
    }

    return $new_array;
}

var_dump(my_array_unique($arr));