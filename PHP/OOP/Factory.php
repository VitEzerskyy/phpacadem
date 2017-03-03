<?php

interface iCars {
    public function getTypeAndModel();
}

//Pattern Factory or factory method. порождающий шаблон проектирования, предоставляющий подклассам
// интерфейс для создания экземпляров некоторого класса. В момент создания наследники могут определить,
// какой класс создавать. Иными словами, Фабрика делегирует создание объектов наследникам родительского
// класса. Это позволяет использовать в коде программы не специфические классы, а манипулировать
// абстрактными объектами на более высоком уровне.
class Sedan implements iCars{
    const SIZE = "Sedan";
    private $type, $model;

    public function __construct($type, $model)
    {
        $this->type = $type;
        $this->model = $model;
    }

    public function getTypeAndModel()
    {
        return __CLASS__ . " " . $this->type . " " . $this->model;
    }
}

class Hatchback implements iCars{
    const SIZE = "Hatchback";
    private $type, $model;

    public function __construct($type, $model)
    {
        $this->type = $type;
        $this->model = $model;
    }

    public function getTypeAndModel()
    {
        return __CLASS__ . " " . $this->type . " " . $this->model;
    }
}

class Factory {
    public static function create($size, $type, $model)
    {
        switch ($size){
            case Sedan::SIZE:
                return new Sedan($type, $model);
            case Hatchback::SIZE:
                return new Hatchback($type, $model);
            default:
                //exception
                break;
        }
        return new Sedan($type, $model);
    }
}

$car = Factory::create(Sedan::SIZE, "ford", "focus");
$car2 = Factory::create(Hatchback::SIZE, "ford", "fiesta");
echo $car->getTypeAndModel();
echo PHP_EOL;
echo $car2->getTypeAndModel();
