<?php
setcookie("username", $_POST['name'], time()-14800000);
setcookie("password", $_POST['pass'], time()-14800000);
header('Location: login.php');