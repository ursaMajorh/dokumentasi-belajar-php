<?php

// while
$i = 0;
while($i <= 5) {
  echo $i;
  $i++;
}
// 012345


// do while
do {
  echo $i;
  $i++;
} while ($i <= 10);
// 678910

// for
for($x = 0; $x <= 5; $x++) {
  echo $x;
} 
// 012345


// foreach 
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $key => $value) {
  echo $key . $value;
}
// 0red 1green 2blue 3yellow 

?>

