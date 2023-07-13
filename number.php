<?php

// apakah variabel bilangan bulat?
$x = 420;
var_dump(is_int($x)); // true
$x = 4.20;
var_dump(is_int($x)); // false

// apakah variabel bilangan float?
$x = 6.9;
var_dump(is_float($x)); // true

// apakah bilangan tak terbatas?
$x = 1.9e411;
var_dump($x);

// perhitungan yang invalid akan menghasilkan NaN
var_dump(acos(8));

// apakah variabelnya numerik?
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// cast string ke int 
$x = "123.456";
echo((int)$x); // 123

// cast float ke int 
$x = 1234.56;
echo((int)$x); // 1234

?>
