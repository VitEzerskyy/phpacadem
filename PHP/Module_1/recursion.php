<?php

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

function print_cats ($cats, $f = '')
{
    foreach ($cats as $item){
        if(is_array($item)){
            foreach ($item as $subitem){
                if(is_array($subitem)){
                    print_cats($subitem, $f.'--');
                }else{
                    echo $f.$subitem;
                    echo "<br>";
                }
            }
        }else{
            echo $f.$item;
            echo "<br>";
        }

    }
}

print_cats($shop_categories);


?>