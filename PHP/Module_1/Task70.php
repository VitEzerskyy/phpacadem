<?php

function is_prime ($n){
    for($x=2; $x * $x <= $n; $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}

echo is_prime (53);