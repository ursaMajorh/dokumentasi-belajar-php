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


$sql = "INSERT INTO myGuests (firstname, lastname, email)
         VALUES ('John', 'Doe', 'jdoe@gmail.com');
        INSERT INTO myGuests (firstname, lastname, email)
         VALUES ('Mary', 'Moe', 'mary@example.com');
        INSERT INTO myGuests (firstname, lastname, email)
         VALUES ('Julie', 'Dooley', 'julie@example.com');";


if(mysqli_multi_query($conn, $sql)) {
  echo "New record created succsessfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



// tutup koneksi 
mysqli_close($conn);

?>
