<?php

// Singleton - class for working with databases. Singleton – один из самых простых шаблонов для понимания.
// Основное назначение – гарантировать существование только одно экземпляра класса.
// Причиной обычно является следующее: требуется только один объект исходного класса и Вам необходимо,
// что бы объект был доступен в любом месте приложения, т.е. глобальный доступ.
class Singleton {
private static $instance;

public static function getInstance()
{
if(is_null(self::$instance)){
self::$instance = new self();//new "self" object  =  new Singleton()
}
return self::$instance;
}

private function __construct(){}

private function __clone(){}//constructor for clone

private function __wake(){} //for unserialize
}

$s = Singleton::getInstance();
print_r($s);
$s2 = Singleton::getInstance(); //return self::$instance
print_r($s2);