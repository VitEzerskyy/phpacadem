<form action="/" method="post" enctype="multipart/form-data">
    <input type="text" name="fname">
    <input type="file" name="ffile">
    <input type="submit" value="submit">
</form>

<?php

move_uploaded_file($_FILES['ffile']['tmp_name'], '/uploads/' . $_POST['fname']);