<?php
function uppercase($str){
    $str = str_replace(". ", ".", $str);
    $arr = explode(".", $str);
    $count = count($arr);

    for ($i = 0; $i < $count; $i++) {
        $str0 = mb_strtoupper(mb_substr($arr[$i], 0, 1));
        $str1 = mb_substr($arr[$i], 1);
        $arr[$i] = $str0.$str1;
    }


    $result_str = implode(". ", $arr);
    echo $result_str;

}
uppercase("а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти");
?>