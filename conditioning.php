<?php


// if else
function isOdd($x) {
  if($x % 2 != 0) {
    echo("Yes, It's odd");
  } else {
    echo("Not, It's even");
  }
}

isOdd(5); // Yes, It's odd
isOdd(10); // Not, It's even


// switch case 
$colors = array("red", "green", "blue");
$favColor = $colors[2]; // blue
switch($favColor) {
  case $colors[0]:
    echo "Your favorite color is $colors[0]";
    break;
  case $colors[1]:
    echo "Your favorite color is $colors[1]"; 
    break;
  case $colors[2]:
    echo "Your favorite color is $colors[2]";
    break;
  default:
    echo "You don't choose your favorite color";
}

// ternary 
$x = 1;
$isOne = $x == 1 ? "Yes" : "Not";
echo $isOne; // Yes


?>
