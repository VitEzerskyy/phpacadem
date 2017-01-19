<form action="/PHP/Module_1/move_uploaded_file.php" method="POST" enctype="multipart/form-data">
    <label for="fname">Введите имя файла</label>
    <input type="text" name="fname" id="fname"><br><br>
    <input type="file" name="ffile" id="ffile"><br><br>
    <input type="submit" value="submit">
</form>

<?php
$uploaddir = __DIR__;
$tmp_name = $_FILES["ffile"]["tmp_name"];
move_uploaded_file($tmp_name, "$uploaddir/uploads/{$_POST['fname']}");
?>