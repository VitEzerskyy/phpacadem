<?php
/**
 * Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 */

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