<?php declare(strict_types=1);

// user defined function
function msg($name) {
  echo "Hello, $name";
}
msg("Hilman");

// php adalah loosely typed language
// php otomatis mengaitkan tipe data ke variable tanpa ditentukan
// di php v7, bisa menentukan tipe data
// dengan menambahkan deklarasi "strict"
// akan muncul error dika tipe data tidak cocok

function add(int $a, int $b) {
  return $a + $b;
}
// echo add(5, "5"); -- akan error, karena tipe data tidak cocok


// default argument
function setHeight(int $minHeight = 50) {
  echo "The height is $minHeight";
}
setHeight(); // 50, default value-nya 50 jika arg kosong


// return value 
function calc(int $x, int $y, $z) {
  switch($z) {
    case "tambah":
      $res = $x + $y;
      break;
    case "kurang":
      $res = $x - $y;
      break;
    case "kali":
      $res = $x * $y;
  }
  return (float)$res; // mengubah int menjadi float
}
echo calc(2, 3, "kali"); // 6 (2 * 3 = 6)
echo calc(2, 3, "kurang"); // -2 (2 - 3 = -1)
echo calc(2, 3, "tambah"); // 5 (2 + 3 = 5)


// passing arg by reference
// Secara default, php akan menyalin nilai dari argument
// dan menggunakan salinan tersebut dalam function
// jika mengubah nilai arg dalam function, itu tidak akan
// mengubah nilai vatiable asli di luar function
// untuk mengubahnya, diperlukan oerator "&" pada parameter
function xyz(&$num) {
  $num = 6;
}
$x = 1;
xyz($x);
echo $x; // 6



?>
