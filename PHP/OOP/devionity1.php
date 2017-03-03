<?php
interface A {
    public function login();
    public function logout();
}

class User implements A {
    public $login;
    public $password;
    public $email;
    public $rating = 0;
    public $isLogged;
    private $mama = 0;

    private $data = array();

    public function login () {
        echo "Добро пожаловать!<br>";
        $this->isLogged = true;
    }

    public function logout () {
        echo "До свидания!<br>";
        $this->isLogged = false;
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }

        return false;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}

class Car {

    public function __construct()
    {
        echo "Car created <br>";
    }

    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;

    public function getPrice($format)
    {
        if ($format) {
            $this->price = number_format($this->price, 1, ',', ' ');
        }
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = round($price, 2);
    }

    public function showBrand() {
    echo $this->brand."<br>";
}

    public function showModel() {
        echo $this->model."<br>";
    }
}

class WaterCar extends Car {
    public $waterSpeed;
}

class Manager extends User {

}

class Admin extends User {

}

class Citrus {
    public static $number = 0;

    public function __construct()
    {
        self::$number +=1;
    }
}

class Fraction {

    public function __construct($numerator,$denumerator)
    {
        $this->numerator = $numerator;
        $this->denumerator = $denumerator;
        try {

            if ($this->denumerator ==0) {
                throw new Exception("Знаменатель не может быть нулем!<br>");
            }

        } catch(Exception $e) {
            echo $e->getMessage();
            die();
        }
        $this->result_fr = $numerator."/".$denumerator;
        echo $this->result_fr."<br>";
    }

    public $numerator;
    public $denumerator;
    public $result_fr;

    private static function nod($a, $b)
    {
        if ($a==0 || $b==0) {
            return 0;
        }

        while ($a <> 0 && $b <> 0) {
            if ($a > $b) {
                $a = $a % $b;
            }else{
                $b= $b % $a;
            }
        }
        return $a + $b;
    }

    public function reduction() {
        $res = self::nod($this->numerator, $this->denumerator);
        if ($res ==0) {
            return 0;
        }
        $res1 = $this->numerator/$res;
        $res2 = $this->denumerator/$res;
        $res_fr = $res1."/".$res2;
        return $res_fr;
    }

    public function decimal() {
        $res = round($this->numerator/$this->denumerator, 2);
        return $res;
    }

    public static function sum(Fraction $a, Fraction $b)
    {
        $res_denumerator = $a->denumerator * $b->denumerator;
        $res_numerator = ($a->numerator * $b->denumerator)+($b->numerator * $a->denumerator);
        $res = self::nod($res_numerator, $res_denumerator);
        $res_numerator/=$res;
        $res_denumerator/=$res;
        $res_fr = $res_numerator."/".$res_denumerator;
        return $res_fr;
    }

    public static function sub(Fraction $a, Fraction $b)
    {
        $res_denumerator = $a->denumerator * $b->denumerator;
        $res_numerator = ($a->numerator * $b->denumerator)-($b->numerator * $a->denumerator);
        $res = self::nod($res_numerator, $res_denumerator);
        $res_numerator/=$res;
        $res_denumerator/=$res;
        $res_fr = $res_numerator."/".$res_denumerator;
        return $res_fr;
    }

    public static function mul(Fraction $a, Fraction $b)
    {
        $res_denumerator = $a->denumerator * $b->denumerator;
        $res_numerator = $a->numerator * $b->numerator;
        $res = self::nod($res_numerator, $res_denumerator);
        if ($res ==0) {
            return 0;
        }
        $res_numerator/=$res;
        $res_denumerator/=$res;
        $res_fr = $res_numerator."/".$res_denumerator;
        return $res_fr;
    }

    public static function div(Fraction $a, Fraction $b)
    {
        try {
            if ($b->numerator == 0) {
                throw new Exception("Деление на 0 невозможно!<br>");
            }

        } catch(Exception $e) {
            echo $e->getMessage();
            die();
        }
        if ($a->numerator ==0) {
            return 0;
        }
        $res_denumerator = $a->denumerator * $b->numerator;
        $res_numerator = $a->numerator * $b->denumerator;
        $res = self::nod($res_numerator, $res_denumerator);
        $res_numerator/=$res;
        $res_denumerator/=$res;
        $res_fr = $res_numerator."/".$res_denumerator;
        return $res_fr;
    }
}

/*$toyota = new Car;
$mazda = new Car;
$ford = new Car;

$john = new User;
$mike = new User;
$sven = new User;

$toyota->brand = 'Toyota';
$toyota->model = 'Corolla';
$toyota->year = 2000;
$toyota->driver = $john;

$mazda->driver = $mike;
$mazda->brand = 'Mazda';
$mazda->model = '6';
$mazda->year = 2015;

$ford->driver = $sven;
$ford->brand = 'Ford';
$ford->model = 'Taurus';
$ford->year = 1995;

/*$newUser = new User;
$newUser->login();
$newUser->logout();
echo $newUser->isLogged;
$mazda->showBrand();
$mazda->showModel();*/

/*$toyota->setPrice(1195.455645);
echo $toyota->getPrice(0). "<br>";

$manag = new Manager;
$adm = new Admin;

$pasha = new User;
$pasha->login = 'Pasha';
$pasha->password = '12345';
$pasha->email = 'aa@gmail.com';

$new_var = clone $pasha;
$new_var->login = 'dfsdf';
$new_var->password = '345242';
$new_var->email = 'ad@afad.com';
*/
//var_dump($pasha != $new_var);

/*$a = new Citrus();
$b = new Citrus();
$c = new Citrus();
echo Citrus::$number."<br>";
echo "=======================<br>";*/

//$arr = array ("name" => "Vital", "email" => "_ezerskyy@gmail.com", "message" => "Hello people!");
//var_dump ((object)$arr);

$a = new Fraction(10, 42);
$b = new Fraction(0, 50);

echo "Сократим дробь ".$a->result_fr." -  Результат - ". $a->reduction()."<br>";
echo "Сократим дробь ".$b->result_fr." -  Результат - ". $b->reduction()."<br>";
echo "Десятичная вариация ".$a->result_fr." -  Результат - ". $a->decimal()."<br>";
echo "Десятичная вариация ".$b->result_fr." -  Результат - ". $b->decimal()."<br>";
echo "При сложении ".$a->result_fr." и ". $b->result_fr." получилось - ".  Fraction::sum($a, $b)."<br>";
echo "При вычитании ".$a->result_fr." и ". $b->result_fr." получилось - ".  Fraction::sub($a, $b)."<br>";
echo "При умножении ".$a->result_fr." и ". $b->result_fr." получилось - ".  Fraction::mul($a, $b)."<br>";
echo "При делении ".$a->result_fr." и ". $b->result_fr." получилось - ".  Fraction::div($a, $b)."<br>";



/*
$r = new User;
echo $r->papa;
$r->papa = 70;
echo $r->papa;
*/
?>