<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$userdata = array_map('htmlentities', $_FILES);

    if ( $_FILES["image"]["tmp_name"] == false || $_FILES["image1"]["tmp_name"] == false) {
        header("Location: Task6.php/?errors=1");
    } else {
        $uploaddir ="C:/xampp/htdocs/mysite.local/PHP/homework_3/gallery";
        $tmp_name = $_FILES["image"]["tmp_name"];
        $tmp_name1 = $_FILES["image1"]["tmp_name"];
        $name_f = basename($_FILES["image"]["name"]);
        $name_f1 = basename($_FILES["image1"]["name"]);
        move_uploaded_file($tmp_name, "$uploaddir/$name_f");
        move_uploaded_file($tmp_name1, "$uploaddir/$name_f1");

        file_put_contents("db.txt", $name_f."|".$name_f1."\n", FILE_APPEND);
    }

    //header("Location: /");
    //header("Location: ".$_SERVER["HTTP_REFERER"]);
}  ?>
<style>

    input [type=file] {
        margin: 50px;
    }

    input[type=submit] {
        width: 30%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        font-family: "Trebuchet MS", "Lucida Sans", sans-serif;
        font-size: 0.9rem;
    }

    .userinfo {
        overflow: hidden;
        position: relative;

        color:#FFFFFF;
        padding: 10px;
    }

    .userinfo span {
        padding-left: 10px;
    }

</style>
<div style="margin: 20px auto; width: 40%;
             padding: 15px;">


    <?php if( isset ($_GET['errors']) && $_GET['errors'] == 1):?>
        <script>alert('error');</script>
        <div style="color: #d9534f;"><h4>Вы не выбрали файл</h4></div>

    <?php endif; ?>

    <form method="POST" action="Task6.php" enctype="multipart/form-data">
        <label for="file">Загрузите картинки</label><br><br>
        <input type="file" name="image" id="file"><br><br>
        <input type="file" name="image1" id="file1">
        <input type="submit" value="Upload">
    </form>
</div>
<?php

$h = fopen("db.txt", 'r');
$line = '';
while($line = fgets($h)):
    list($image, $image1) = explode("|", $line);?>
    <div style="width: 39%; margin: 0 auto;
                word-wrap: break-word;">
        <div class="userinfo">
            <img src = "gallery/<?=$image?>" width="200" align="left">
            <img src = "gallery/<?=$image1?>" width="200" align="right">
        </div>
    </div>

<?php endwhile;
fclose($h);
?>