<?php
if ((!isset($_COOKIE['username'])) || (!isset($_COOKIE['password']))) {
    header('Location: login.php');
} else {
    echo "Добрый день, {$_COOKIE['username']}"."<br>";
    echo "<a href='logout.php'> Выйти </a>";
}
