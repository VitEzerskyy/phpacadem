<?php

$arr = array ('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
foreach ($arr as $value) {
    if ($value == 'Saturday' || $value == 'Sunday') {
        echo "<strong>$value</strong>"."<br>";
    } else {
        echo $value . "<br>";
    }
}
?>