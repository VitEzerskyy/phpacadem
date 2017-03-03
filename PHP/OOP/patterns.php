<?php
//inversion of control
//dependency injection
//example "why we use Registry"
class Application {
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function run()
    {
        $data = array("a" => 10, "b" => 20);

        $this->client->setOutput(new JsonOutput());

        echo $this->client->getOutput($data);
    }
}
$client = new Client();
$app = new Application($client);
$app->run();




//////////////////////////////////////////////////////////////////////////////////////////////////////

//Pattern Strategy - encapsulation of algorithms
interface OutputInterface{
    public function load($data);
}

class JsonOutput implements OutputInterface {
    public function load($data)
    {
        return json_encode($data);
    }
}

class SerializeOutput implements OutputInterface {
    public function load($data)
    {
        return serialize($data);
    }
}

class Client {
    /** @var  OutputInterface $output */
    private $output;

    public function setOutput(OutputInterface $out)
    {
        $this->output = $out;
    }

    public function getOutput($data)
    {
        return $this->output->load($data);
    }
}

$client = new Client();
$client->setOutput(new JsonOutput());

$data = array("a" => 10, "b" => 20);
echo $client->getOutput($data);
echo PHP_EOL;

$client->setOutput(new SerializeOutput());
echo $client->getOutput($data);







//////////////////////////////////////////////////////////////////////////////////////////

//Pattern Registry
interface iCar {
    public function getTypeAndModel();
}

class Sedan implements iCar{
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

class Hatchback implements iCar{
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

    public function &get($name)// & - alternative Singleton
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







/////////////////////////////////////////////////////////////////////////////////


//Pattern Factory or factory method
class Sedan implements iCar{
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

class Hatchback implements iCar{
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








/////////////////////////////////////////////////////////////////////////////////////////////////////////

// Singleton - class for working with databases
class Singleton {
    private static $instance;

    public static function getInstance()
    {
        if(!is_null(self::$instance)){
            self::$instance = new self();//new "self" object  =  new Singleton()
        }
        return self::$instance;
    }

    private function __construct(){}

    private function __clone(){}//constructor for clone

    private function __wake(){} //for unserialize
}

$s = Singleton::getInstance();

$s2 = Singleton::getInstance(); //return self::$instance
