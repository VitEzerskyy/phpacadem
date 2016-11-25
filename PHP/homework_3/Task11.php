<?php
function uppercase($str){

    $str = str_replace(". ", ".", $str);
    $arr = explode(".", $str);
    $count = count($arr);

        for ($i = 0; $i < $count; $i ++) {
            $arr[$i][0] = mb_strtoupper($arr[$i][0], 'UTF-8');
        }

    $result_str = implode(". ", $arr);
    echo $result_str;

}
uppercase("some english. text bla bla bla. kuku. yabadabadu");
?>