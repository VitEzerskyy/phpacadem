<?php
$day = date("l");
$arr = array ('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
foreach ($arr as $value) {
    if ($value == $day) {
        echo "<em>$value</em>"."<br>";
    } else {
        echo $value . "<br>";
    }
}
?>