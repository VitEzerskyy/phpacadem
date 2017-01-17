<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "<h2>Добро пожаловать, {$_SESSION["username"]}</h2>";
    echo "<br><h3><a href='logout.php'>Выйти</a></h3>";
} else {
    header("Location: index.php");
}