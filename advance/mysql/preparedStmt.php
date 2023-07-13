<?php

  $servername = "127.0.0.1"
  $username = "root";
  $password = "1234";
  $db = "myDB";
  $conn = new mysqli($servername, $username, $password, $db);

  // Memeriksa koneksi
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // prepared statement adalah fitur yang digunakan untuk 
  // mengeksekusi statement SQL yang sama atau serupa 
  // berulang kali dengan efisiensi tinggi.

  // prepared statement Mencegah serangan SQL injection 
  // dengan memperlakukan nilai parameter sebagai data 
  // dan bukan bagian dari perintah SQL.

  // Mempersiapkan statement SQL dengan parameter yang diikat
  $stmt = $conn->prepare("INSERT INTO myGuests 
    (firstname, lastname, email) VALUES (?, ?, ?)");

  // Mengikat (bind) nilai parameter ke statement SQL
  $stmt->bind_param("sss", $firstname, $lastname, $email);

  // Menetapkan nilai parameter
  $firstname = "Hilman";
  $lastname = "Apriadi";
  $email = "manaprdi@gmail.com";

  // Menjalankan statement SQL dengan parameter pertama
  $stmt->execute();

  // Menetapkan nilai parameter baru
  $firstname = "Siti";
  $lastname = "Sarah";
  $email = "ssrah@gmail.com";

  // Menjalankan statement SQL dengan parameter kedua
  $stmt->execute();

  // Menampilkan pesan sukses
  echo "New records created successfully";

  // Menutup statement dan koneksi database
  $stmt->close();
  $conn->close();
?>

