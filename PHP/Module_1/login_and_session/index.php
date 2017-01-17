<!DOCTYPE html>
<html>
<head>
    <title>Session and cookie example</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="index.php" method="post">
    <fieldset>
        <legend>Login form</legend>
        <label for="login">Your login: </label>
        <input id="login" type="text" name="login">
        <label for="password">Your password: </label>
        <input id="password" type="password" name="password">
    </fieldset>
    <input class="submit" type="submit" value="Submit">
</form>
</body>
<footer>

</footer>
</html>

<?php
if (isset($_POST["login"]) && isset($_POST["password"]) && ("" != $_POST["login"]) && ("" != $_POST["password"])) {
    session_start();
    $_SESSION["username"] = $_POST["login"];
    header("Location: secure.php");
}
?>