<?php

/*Написать рекурсивную функцию аналог print_r*/

$shop_categories = array(
    array(
        'title' => 'computers',
        'children' => array(
            array(
                'title' => 'laptops',
            ),
            array(
                'title' => 'monoblocks',
            ),
            array(
                'title' => 'System units',
                'children' => array(
                    array(
                        'title' => 'Tower',
                    ),
                    array(
                        'title' => 'MiniTower',
                    )
                ),
            ),
        ),
    ),
    array(
        'title' => 'Appliances',
        'children' => array(
            array(
                'title' => 'cleaner',
            ),
            array(
                'title' => 'fridge',
            ),
        ),
    ),
);
echo "<pre>";
print_r ($shop_categories);
echo "</pre>"."<br><br>";


function print_copy ($cats, $f = '&nbsp &nbsp')
{
    foreach ($cats as $key => $item){
        if(is_array($item)){
            echo $f."[".$key."]"."=> Array"."<br>";
            echo $f."("."<br>";
            foreach ($item as $key1 => $subitem){
                if(is_array($subitem)){
                    echo $f.$key1."=> Array"."<br>";
                    echo $f."("."<br>";
                    print_copy($subitem, $f.' &nbsp &nbsp ');
                    echo $f.")"."<br>";
                }else{
                    echo $f."[".$key1."]"."=>".$subitem;
                    echo "<br>";
                }
                echo $f.")"."<br>";
            }
        }else{
            echo $f."[".$key."]"."=>".$item;
            echo "<br>";
        }

    }
}

print_copy($shop_categories);