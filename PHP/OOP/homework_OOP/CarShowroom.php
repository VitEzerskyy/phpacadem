<?php
class CarShowroom {
    public $name;
    public $phone;
    public $data = array();

    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function addCar ($obj) {
        $this->data[] = $obj;
    }

    public function listOfCars()
    {
        print_r($this->data);
    }
}