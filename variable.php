<?php

// variable dimulai dengan "$" dan diikuti nama variable-nya
// nama variabel harus dimulai dengan huruf atau karakter garis bawah
// nama variabel tidak boleh dimulai dengan angka
// nama variabel peka terhadap huruf besar-kecil, $age dan $AGE berbeda

$txt = "Hello, PHP!";
$x = 1;
$y = 10.5;

echo"$txt, $x, $y";



echo"<br>";

// variable scope

// global
function test() {
  // gunakan keyword global untuk memanggil variable di luar function
  global $x;
  echo"$x";

  // php juga menyimpan semua var global dalam array $GLOBALS[index]
  $GLOBALS["y"] = $GLOBALS["x"] + $GLOBALS["y"];
}

test();
echo"<br> $y <br>";


// local 
function test2() {
  $var2 = 2;
  echo"$var2";
}

test2();

echo"<br>";

// static
function test3() {
  static $var3 = 0;
  $var3++;
  echo"$var3";
}


test3();
test3();
test3();


?>
