
<?php

class DbWrapper {
    private $connection;
    private static $instance;

    static function getInstance()
    {
        if(is_null(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        try {
            $this->connection = new PDO("mysql:dbname=fstk_test;host=localhost", 'root', '');
        } catch (Exception $e){
            echo $e->getMessage();
            exit;
        }
    }
    private function __clone(){}
    private function __wake(){}

    // C R U D
    public function insert($table, $data)
    {
        $q = "INSERT INTO $table {{cols}} VALUES {{vals}}";
        $keys = array_keys($data);

        $q = str_replace("{{cols}}", implode(',', $keys), $q);
        $q = str_replace("{{vals}}", ':' . implode(', :', $keys), $q);

        $stmt = $this->connection->prepare($q);
        foreach ($data as $k => $v){
            if(is_int($v)){
                $stmt->bindParam(":{$k}", $data[$k], PDO::PARAM_INT);
            } else if (is_string($v)){
                $stmt->bindParam(":{$k}", $data[$k], PDO::PARAM_STR);
            } else {
                $stmt->bindParam(":{$k}", $data[$k]);
            }
        }
        $stmt->execute();
        return $this->connection->lastInsertId();
    }

    public function select(){}

    public function update(){}

    public function delete(){}

}

$db = DbWrapper::getInstance();
$u = ['name' => 'Pit', 'password' => sha1("123"), 'email' => 'e'];

$db->insert('users', $u);