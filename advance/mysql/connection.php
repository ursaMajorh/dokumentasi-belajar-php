<?php

$serverName = "127.0.0.1";
$userName  = "root";
$password = "1234";

// membuat koneksi ke MySQL
$conn = mysqli_connect($serverName, $userName, $password);

// memeriksa, apakah sudah terhubung 
if(!$conn) {
  die("Connection failed" . mysqli_connect_error());
}

echo "Connected succsessfully!";

// tutup koneksi 
mysqli_close($conn);

?>
