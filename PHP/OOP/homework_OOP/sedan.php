<?php

class Sedan extends Car implements iCar {
    public $type = 'Sedan';

    public function __construct($brand, $model, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->addToShowroom($this);
    }

    public function getPrice()
    {
        echo $this->price.PHP_EOL;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function showBrand()
    {
        echo $this->brand.PHP_EOL;
    }

    public function showModel()
    {
        echo $this->model.PHP_EOL;
    }

    private function addToShowroom($obj) {
        CarShowroom::$data[] = $obj;
    }
}
