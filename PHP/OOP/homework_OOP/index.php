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
$cs = new CarShowroom('Autologistics','995-81-08');
$cs->listOfCars();
