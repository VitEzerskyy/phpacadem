<?php
require_once "autoload.php";

$s1 = new Sedan('BMW', 'X5', 50000);
$s1->getPrice();

$h1 = new Hatchback('Audi', 'A7', 40000);
$h1->showBrand();

$s2 = new Sedan('Jaguar', '5600', 100000);
$s2->showModel();

$h2 = new Hatchback('BMW', 'X3', 30000);
$h2->setPrice(35000);

$autolog = new CarShowroom('Autologistics','995-81-08');
$autolog->addCar($s1);
$autolog->addCar($h2);
$autolog->listOfCars();

$dev = new CarShowroom('Devend', '995-76-09');
$dev->addCar($s2);
$dev->addCar($h1);
$dev->addCar($s1);
$dev->listOfCars();
