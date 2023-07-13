<?php

// nama konstanta dimulai dengan huruf atau underscore
// nama konstanta tidak dimulai dengan tanda $
// konstanta secara otomatis bersifat global

// define(nama, nilai, case-sensitive(default-nya false));

define("sayHi", "Hello World");
echo sayHi; // Hello World

define("GREETING", "Welcome to W3Schools.com!", true);
echo GREETING; // Welcome to W3Schools.com!"


// konstanta array 
define("cars", [
  "Tesla",
  "BMW",
  "Toyota"
]);
echo cars[0]; // Tesla


// konstanta bersifat global
function greeting() {
  echo GREETING;
}

greeting(); // Welcome to W3Schools.com!"

?>
