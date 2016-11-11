<?php

calc ('%');

function calc($operator) {
    switch ($operator) {
        case '+':
            addition(10,5);
            break;
        case '-':
            subtraction(10,5);
            break;
        case '/':
            division(0,5);
            break;
        case '*':
        multiplication(10,5);
        break;
        case '%':
            modulo(10,20);
            break;
    }
}
function addition ($a,$b) {
echo $a + $b;
}

function subtraction ($a,$b) {
    echo $a - $b;
}

function division ($a,$b) {
    if ($b!=0){
        echo $a / $b;
    } else {
        echo "На ноль делить нельзя!";
    }
}

function multiplication ($a,$b) {
    echo $a * $b;
}

function modulo ($a,$b) {
    echo $a % $b;
}
?>