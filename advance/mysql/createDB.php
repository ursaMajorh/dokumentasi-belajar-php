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

$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)) {
  echo "Database created succsessfully";
} else {
  echo "Error create database " . mysqli_error($conn);
}



// tutup koneksi 
mysqli_close($conn);

?>
