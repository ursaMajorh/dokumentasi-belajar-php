<?php

$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$db = "myDB";

$conn = mysqli_connect($servername, $username, $password, $db);

// cek koneksi 
if(!$conn) {
  die("Connection failed ". mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM myGuests";
$result = mysqli_query($conn, $sql);
var_dump(mysqli_fetch_assoc($result));

if(mysqli_num_rows($result) > 0) {
  // output data ada setiap baris 
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . " name: " . $row["firstname"] . " " . $row["lastname"] . "<hr>";
  }
}



?>
