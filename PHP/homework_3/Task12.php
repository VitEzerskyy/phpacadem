<?php
function reverse_sentence($str){

    $str = str_replace(". ", ".", $str);
    $arr = explode(".", $str);
    $count = count($arr);
    $arr_new = array();

    for ($i = $count-1; $i >= 0; $i --) {
        $arr_new[] = $arr[$i];

    }
    $result_str = implode(". ", $arr_new);
    echo $result_str;

}
reverse_sentence("А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. 
А король-то — голый. А ларчик просто открывался. А там хоть трава не расти");
?>