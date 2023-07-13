<?php

// php memiliki tie data sebagai berikut:
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

//string
$txt = "Hello, World";
var_dump($txt);

// Integer
$int = 1;
var_dump($int);

// float
$float = 10.5 ;
var_dump($float);

// Boolean
$bool = true;
var_dump($bool);

// array 
$cars = array("Volvo", "Tesla", "BMW");
var_dump($cars);

// Object
// untuk membuat object, maka harus membuat class terlebih dahulu
class Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "."; 
  }
}

// object merupakan turunan dari class
$car1 = new Car("Black", $cars[1]);
$car2 = new Car("Red", $cars[2]);
echo $car1->message();
echo $car2->message();

// NULL
$x = null;
var_dump($x);

// Resource
// PHP, tipe data "resource" digunakan untuk merepresentasikan sumber 
// daya eksternal seperti koneksi database, file, atau koneksi jaringan.

?>
