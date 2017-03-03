<?php
function nod($a, $b)
{
    if ($a==0 || $b==0) {
        return 0;
    }

    while ($a <> 0 && $b <> 0) {

        if ($a > $b) {
            $a = $a % $b;
        }else{
            $b= $b % $a;
        }
        //$nod= $a + $b;
    }
    return $a + $b;
}
echo nod(0,50);