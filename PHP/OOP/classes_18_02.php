<?php

// ABSTRACT AND FINAL CLASSES
abstract class Animal {
public $age, $name;

public function describe()
{
return $this->name . " is " . $this->age . " years old";
}

abstract protected function voice($a, $b);
}

final class Dog extends Animal {

public function __construct($age, $name)
{
$this->age = $age;
$this->name = $name;
}

public function voice($a, $b, $c = '')
{
// TODO: Implement voice() method.
}
}

$dog = new Dog(3, "Fluffy");
echo $dog->describe();


// LATE STATIC BINDING
class A {
public function foo()
{
$this->doSmth();
}

public static function who()
{
echo __CLASS__;
}

public static function test()
{
static::who();
}
}

class B extends A {
public static function who()
{
echo __CLASS__;
}
}

B::test();


// METHODS OVERLOADING
class Fraction {
public $a, $b;

public function __construct($a, $b)
{
$this->a = $a;
$this->b = $b;
}

public static function __callStatic($name, $arguments)
{
if(count($arguments) != 2){
return false;
}

if($arguments[0] instanceof Fraction && $arguments[1] instanceof Fraction){
return self::sumUsualFractions($arguments);
}

if(is_float($arguments[0]) && is_float($arguments[1])){
return self::sumDecimalFractions($arguments);
}

return false;
}

private static function sumUsualFractions($arguments)
{
return "sum of fractions";
}

private static function sumDecimalFractions($arguments)
{
return $arguments[0] + $arguments[1];
}
}

class MyClass {
function __call($name, $arguments)
{
if(count($arguments) != 2){
return false;
}

if($arguments[0] instanceof Fraction && $arguments[1] instanceof Fraction){
return "sum of fractions";
}

if(is_float($arguments[0]) && is_float($arguments[1])){
return $arguments[0] + $arguments[1];
}

return false;
}

public static function __callStatic($name, $arguments)
{
// TODO: Implement __callStatic() method.
}

}
$x = new MyClass();

$y = new Fraction(1, 3);
$z = new Fraction(2, 5);

echo $x->sumFractions($y, $z);
echo PHP_EOL;
echo $x->sumFractions(0.2, 0.98);
echo PHP_EOL;
echo Fraction::sumFraction($y, $z);
echo PHP_EOL;
echo Fraction::sumFraction(0.2, 0.98);*/

// PROPERTIES OVERLOADING
class MyClass {
public $property = 1;

public $data = array();

public function __get($name)
{
echo "\nGetting property $name\n";
if(isset($this->data[$name])){
return $this->data[$name];
}

return false;
}

public function __set($name, $value)
{
echo "\nSetting property $name to $value\n";
$this->data[$name] = $value;
}
}
$x = new MyClass();
var_dump($x->property);
var_dump($x->noproperty);
$x->noproperty = 10;
$x->newproperty = 30;
var_dump($x->noproperty);
var_dump($x->data);



?>