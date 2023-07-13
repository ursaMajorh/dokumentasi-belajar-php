<?php

$serverName = "127.0.0.1";
$userName  = "root";
$password = "1234";
$db = "myDB";

// membuat koneksi ke MySQL
$conn = mysqli_connect($serverName, $userName, $password, $db);

// memeriksa, apakah sudah terhubung 
if(!$conn) {
  die("Connection failed" . mysqli_connect_error());
}

$sql = "CREATE TABLE myGuests(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON 
    UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn, $sql)) {
  echo "Table myGuests created succsessfully";
} else {
  echo "Error creating table  " . mysqli_error($conn);
}



// tutup koneksi 
mysqli_close($conn);

?>
