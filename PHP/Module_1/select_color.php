<?php
const DEFAULT_COLOR = '#000000', RED_COLOR = '#ff0000', GREEN_COLOR = '#00ff00', BLUE_COLOR = '#0000ff',
YELLOW_COLOR = '#ffff00';
if(isset($_POST['fcolor'])){
    setcookie('fcolor', $_POST['fcolor'], time()+144000000);
    header("Location: select_color.php");
}

?>

<form action="select_color.php" method="POST">
    <label for="fcolor">Font Color</label>
    <select id="fcolor" name="fcolor">
        <option <?=DEFAULT_COLOR==$_COOKIE['fcolor']?"selected":false?> value="<?=DEFAULT_COLOR?>">default</option>
        <option <?=RED_COLOR==$_COOKIE['fcolor']?"selected":false?> value="<?=RED_COLOR?>">red</option>
        <option <?=GREEN_COLOR==$_COOKIE['fcolor']?"selected":false?> value="<?=GREEN_COLOR?>">green</option>
        <option <?=BLUE_COLOR==$_COOKIE['fcolor']?"selected":false?> value="<?=BLUE_COLOR?>">blue</option>
        <option <?=YELLOW_COLOR==$_COOKIE['fcolor']?"selected":false?> value="<?=YELLOW_COLOR?>">yellow</option>
    </select>
    <br/>

    <input type="submit" value="submit" />
</form>

<p style="color: <?=$_COOKIE['fcolor'] ?>">Lorem Ipsum</p>
