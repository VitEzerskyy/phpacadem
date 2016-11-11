<?php

echo "To boolean \n";

$a = 20;
$b = 0;
$c = -20;

//  результатом будет false, если исходное значение было 0. В остальных случаях результатом будет true
var_dump( (bool)$a, (bool)$b, (bool)$c );