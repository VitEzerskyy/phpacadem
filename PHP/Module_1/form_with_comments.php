<?php

/*Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся ПОД текстовым полем.
Реализовать удаление из комментария всех тегов, кроме тега <b>*/

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    function func($str) {
        return strip_tags($str, '<b>');
    }

    $userdata = array_map("func", $_POST);

    $userdata['age'] = filter_var($userdata['age'], FILTER_VALIDATE_INT) ? : false;

    $uploaddir = __DIR__;
    $tmp_name = $_FILES["image"]["tmp_name"];
    $name_f = basename($_FILES["image"]["name"]);
    move_uploaded_file($tmp_name, "$uploaddir/$name_f");
    $today = date("F j, Y, g:i a");

    if ( $userdata['age'] == false) {
        header("Location: /?errors=1");
    } else {
        $tofile = implode('|', $userdata);
        file_put_contents("db.txt", $tofile, FILE_APPEND);
        file_put_contents("db.txt", "|".$name_f."|".$today."\n", FILE_APPEND);
    }

    //header("Location: /");
    //header("Location: ".$_SERVER["HTTP_REFERER"]);
}  ?>
<style>
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #f8f8f8;
    }

    input [type=file] {
        margin: 50px;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
        margin-bottom:10px;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .required {
        color: red;
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
        background-color:#55737D;
        color:#FFFFFF;
        padding: 10px;
    }

    .userinfo span {
        padding-left: 10px;
    }

    .comment {
        background-color:#CBDCF0;
        color black;
    }

</style>
<div style="margin: 20px auto; width: 50%;
             padding: 15px;">


    <?php if( isset ($_GET['errors']) && $_GET['errors'] == 1):?>
        <script>alert('error');</script>
        <div style="color: #d9534f;"><h4>поле Age должно быть числовым</h4></div>

    <?php endif; ?>

    <form method="POST" action="/" enctype="multipart/form-data">
        <label for="name">Name<span class="required">*</span></label>
        <input type="text" name="name" id="name">
        <label for="age">Age<span class="required">*</span></label>
        <input type="text" name="age" id="age">
        <label for="text">Text<span class="required">*</span></label>
        <textarea name="text" id="text"></textarea>
        <label for="file">Avatar</label>
        <input type="file" name="image" id="file">
        <input type="submit" value="Send">
    </form>
</div>
<?php

$h = fopen("db.txt", 'r');
$line = '';
while($line = fgets($h)):
    list($name, $age, $text, $image, $today) = explode("|", $line);?>
    <div style="width: 49%; margin: 10px auto;
                word-wrap: break-word;">
        <div class="userinfo">
            <img src = "<?=$image?>" width="50" align="left">
            <span><b><?=$name?></b>, <?=$age?> years old </span></br>
            <span><?=$today?></span>
        </div>
        <div class="comment"><?=$text?></div>
    </div>

<?php endwhile;
fclose($h);
?>
