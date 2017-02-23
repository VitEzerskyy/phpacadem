<?php
class CarShowroom {
    public $name;
    public $phone;
    public static $data = array();

    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function listOfCars()
    {
        print_r(self::$data);
    }
}