<?php
function uppercase($str){
    mb_internal_encoding("UTF-8");
    $str = str_replace(". ", ".", $str);
    $arr = explode(".", $str);
    $count = count($arr);
    $foo = 0;

    for ($i = 0; $i < $count; $i ++) {
        $foo = mb_substr($arr[$i], 0, 1, "UTF-8");
        $foo = mb_strtoupper($foo);
        $arr[$i] = str_replace(mb_substr($arr[$i], 0, 1, "UTF-8"), $foo, $arr[$i]);
    }


    $result_str = implode(". ", $arr);
    echo $result_str;

}
uppercase("а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти");
?>