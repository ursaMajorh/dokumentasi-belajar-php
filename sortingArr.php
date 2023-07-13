<?php

$num = array(6, 7, 4, 3, 0, 8);

// ascending
sort($num);
print_r($num); // 0 3 4 6 7 8


// descending
rsort($num);
print_r($num); // 8 7 6 4 3 0

// ascending associative array berdasarkan value-nya
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age);

// descending associative array berdasarkan value-nya
arsort($age);
print_r($age);

// ascending associative array berdasarkan key-nya
ksort($age);
print_r($age);

// descending associative array berdasarkan key-nya
ksort($age);
print_r($age);

?>
