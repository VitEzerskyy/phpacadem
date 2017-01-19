<?php
if ((isset($_POST['name'])) && ($_POST['name']!= "") && ($_POST['pass'] == '123456')) {
    setcookie("username", $_POST['name'], time()+14800000);
    setcookie("password", $_POST['pass'], time()+14800000);
    header('Location: secure.php');
}

?>
<form action="login.php" method="post">
    <label for="name">Login</label>
    <input type="text" id="name" name="name"/>
    <br/>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass"/>
    <br/>

    <input type="submit" value="submit" />
</form>
