<?php
function fruits($str){
    //замена лишних символов в введенном тексте
    $str = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/u","",$str);

    //приведение строки к нижнему регистру, на случай если будут слова в разных регистрах
    $str = mb_strtolower($str);
    $arr_alternate = $arr1 = explode(" ", $str);
    $arr2 = array ();
    $count = 0;

    foreach ($arr1 as $value) {
        if (in_array($value, $arr1) && !in_array($value, $arr2)){
            $arr2[] = $value;
        }
        array_shift($arr1);
    }


    foreach ($arr2 as $value) {
        foreach ($arr_alternate as $value1) {
            if ($value == $value1) {
                $count++;
            }
        }
        echo $value." - ". $count."\n";
        $count = 0;
    }
}
fruits("ЯБЛОКО черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня ананасики черешня груша яблоко черешня черешня вишня яблоко арбузики вишня вишня черешня черешня груша яблоко черешня вишня");
?>