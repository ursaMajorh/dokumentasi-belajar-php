<?php

// indexed array 
// index selalu dimulai dari 0 (nol)
$colors = array("lightgreen", "skyblue", "salmon");
echo $colors[0]; // Tesla

// associwtive array 
// Associative array adalah jenis array di mana indeksnya 
// berupa string atau kunci-kunci yang ditetapkan oleh 
// pengguna, bukan berupa angka seperti pada array biasa.
$person = array (
  "name" => "John Doe",
  "age" => "25",
  "addres" => "123 Bangbayang"
);

echo $person["name"] . " " . $person["age"] . " " . $person["addres"];
// John Doe 25 123 Bangbayang


echo "<br><br>";

// multidimensional array 
$cars = array(
  array("Tesla", "2015", "Black"),
  array("BMW", "2013", "Blue" ),
  array("Volvo", "2017", "Grey")
);

for($num = 0; $num < count($cars); $num++) {
  echo "<p><b>Row number $num</b></p>";
  for($i = 0; $i < count($cars[$num]); $i++) {
    echo "<li>" . $cars[$num][$i] . "</li>";
  }
}

?>
