<?php

// callback adalah sebuah fungsi yang diberikan 
// sebagai argumen kepada fungsi lain 

function myCallback($item) {
  return strlen($item);
}

$strings = ["apple", "banana", "coconut", "orange"];
$lengths = array_map("myCallback", $strings);
print_r($lengths);

// anonymous function sebagai callback 
$lengths2 = array_map(function($item) {
  return strlen($item);
}, $strings);
print_r($lengths2);

echo "<br>";

function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormated($str, $format) {
  echo $format($str) . "<br>";
}

printFormated("Hello World", "exclaim");
printFormated("Hello World", "ask");


?>
