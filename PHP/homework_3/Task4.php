<?php

function dirFiles ($dir){
    $h = opendir($dir);
    while ($str = readdir($h)) {
        if ($str != "." && $str != "..") {
            print_r($str);
            echo "<br>";
        }
    }
    closedir($h);
}

dirFiles(__DIR__);

?>