<?php
$var = [1,2,3,4,5,6];
file_put_contents("array.txt", serialize($var));