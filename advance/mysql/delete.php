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

$del = "DELETE FROM myGuests WHERE id=1";
if (mysqli_query($conn, $del)) {
  echo "Delete succsessfully";
}

?>

<table border="1">
  <tr>
    <td>id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Reg Date</td>
  <tr>

<?php

$select = "SELECT * FROM myGuests";
$result = mysqli_query($conn, $select);
while($row = mysqli_fetch_assoc($result)) {
  echo "
    <tr>
      <td>" . $row['id'] . "</td>
      <td>" . $row['firstname'] . " " . $row['lastname']. "</td>
      <td>" . $row['email'] . "</td>
      <td>" . $row['reg_date'] . "</td>
    </tr>";
}

?>
</table>
