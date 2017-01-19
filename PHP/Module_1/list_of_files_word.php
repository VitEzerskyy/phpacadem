<?php
/*Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.*/
function listDir($dir, $word)
{
    $handle = opendir($dir);

    while ($line = readdir($handle)){
        if(stristr($line, $word)){
            echo $line . "<br>";
        }
    }

    closedir($handle);
}

listDir('C:/xampp/htdocs/mysite.local', 'index');


?>