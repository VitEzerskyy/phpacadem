<?php
/**
 * Created by PhpStorm.
 * User: UniUser
 * Date: 31.10.2016
 * Time: 21:53
 */
$myArray = array(5 => 'England', 10 => 'Wales', 50 => 'Ukraine', 19 => 'USA', 20 => 'Papua');

echo '<pre>';
print_r($myArray);
echo '</pre>';

echo '<br>';

$myArray1 = array('London' => 'England', 'Wal' => 'Wales', 'Kyiv' => 'Ukraine', 'Washington' => 'USA', 'Papa' => 'Papua');
echo '<pre>';
print_r($myArray1);
echo '</pre>';

echo '<br>';
$age = "5";
$result = is_int($age);
var_dump ($result);



?>