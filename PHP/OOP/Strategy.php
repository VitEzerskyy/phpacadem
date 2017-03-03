<?php
//Pattern Strategy - encapsulation of algorithms  - поведенческий шаблон проектирования,
// предназначенный для определения семейства алгоритмов, инкапсуляции каждого из них и
// обеспечения их взаимозаменяемости. Это позволяет выбирать алгоритм путём определения
// соответствующего класса. Шаблон Strategy позволяет менять выбранный алгоритм
// независимо от объектов-клиентов, которые его используют.
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

