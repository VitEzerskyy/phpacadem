<?php

echo "This course is amazing \n";
print("I like beer very much \n");
echo <<<EOL
Кавычки бывают 
'одинарными' и 
"двойными".\n
EOL;

echo "--------------------------------------- \n";

//это самый простой комментарий

# такая форма записи встречается очень редко

/* а это удивительный
многострочный
коммент*/

echo "Об отличии &lt;?php от &lt; ?= .Начиная с версии PHP 5.4.0 запись &lt;?= стала доступна всегда. так что можно использовать оба варианта";

define("DAYS_COUNT", 7);
const MONTH_COUNT = 12; // Работает, начиная с версии PHP 5.3.0