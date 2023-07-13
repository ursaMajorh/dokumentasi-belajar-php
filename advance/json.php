<?php

// JSON adalah singkatan dari Notasi Objek JavaScript,
//  dan merupakan sintaks untuk menyimpan dan bertukar data.

// Karena format JSON adalah format berbasis teks, ia dapat 
// dengan mudah dikirim ke dan dari server, dan digunakan 
// sebagai format data oleh bahasa pemrograman apa pun 


// json_encode() 
// untuk meng-encode nilai menjadi format JSON 
$age = array("John" => 35, "Doe" => 30, "lorem" => 27);
echo json_encode($age) ."<br>";

// json_decode 
// kebalikan dari json_encode()
// akan mengembalikan objek secara default.
$jsonObj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonObj));

echo "<br>";

// mengembalikan array asosiatif 
$arr = json_decode($jsonObj, true);

foreach ($arr as $key => $value) {
  echo $key. " => ". $value ."<br>";
}

?>
