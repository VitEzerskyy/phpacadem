<?php

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