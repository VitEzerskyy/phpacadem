<?php
function foo($arr, $key){
    if(!is_array($arr)){
        echo "&nbsp &nbsp &nbsp"."[".$key."]"." => ".$arr."<br>";
        return;
    }
    echo "Array"."<br>"."("."<br>";
    foreach ($arr as $key => $item){
        foo($item, $key);
    }
    echo ")"."<br>";
}
$mas = array(1,array(1,2),3,4,5);
foo ($mas, $key);
echo "<pre>";
print_r($mas);
echo "</pre>";

?>