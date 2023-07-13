<?php

// fopen()
// bisa digunakan untuk membuat file 

$file = fopen("newFile.txt", "w") or die("unable to open file!");
$txt = "John Doe\n";

// fwrite()
// digunakan untuk memasukan nilai ke dalam file 
fwrite($file, $txt);

// untuk mmenambahkan data ke dalam file, gunakan "a" sebagai
// value dari argument ke 2 
$file = fopen("newFile.txt", "a") or die("unable to open file!");
$txt2 = "Lorem Ipsum";
fwrite($file, $txt2);

fclose($file);

?>
