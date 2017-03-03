<?php
//Pattern Registry Основное назначение этого шаблона проектирования – это организация
// глобального хранилища с единственной точкой доступа. Самая частая реализация
// Реестра – это обычный шаблон типа Singleton с единственным статическим полем-массивом,
// в котором хранятся глобальные объекты.

Подробнее:
interface iCars {
    public function getTypeAndModel();
}

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


class Registry {
    private $container = array();

    public function set($name, $obj)
    {
        $this->container[$name] = $obj;
    }

    public function get($name)// & - alternative Singleton
    {
        return $this->container[$name];
    }
}

$reg = new Registry();
$reg->set("focus", new Sedan("ford", "focus"));
$reg->set("fiesta", new Hatchback("ford", "fiesta"));

//Syntax Highlighting
///** @var $s iCar*/
//$s = $reg->get("focus");
//$s->getTypeAndModel();

echo $reg->get("focus")->getTypeAndModel();