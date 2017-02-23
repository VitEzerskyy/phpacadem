<?php

class Hatchback extends Car implements iCar {
    public $type = 'Hatchback';

    public function __construct($brand, $model, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
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

}