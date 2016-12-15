<?php

function dirFiles ($dir, $needle){
    $h = opendir($dir);
    while ($str = readdir($h)) {
        $pos = mb_stripos($str, $needle);
        if ($str != "." && $str != ".." && $pos !== false ) {
            print_r($str);
            echo "<br>";
        }
    }
    closedir($h);
}

dirFiles(__DIR__, 'Task4');

?>