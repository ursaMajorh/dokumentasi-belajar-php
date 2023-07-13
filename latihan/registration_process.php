<!DOCTYPE html>
<html lang=":en">
  <head>
    <title>Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
<?php

$conn = mysqli_connect("127.0.0.1", "root", "1234", "registration_db");

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);

  $query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$pass')";

  if(mysqli_query($conn, $query)) {
    echo "Account created successfully";
  }
}

mysqli_close($conn);

?>

  </body>
</html>

