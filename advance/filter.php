<?php

// validating data: 
// Menentukan apakah data dalam bentuk yang tepat.
// Sanitizing data
// Hapus semua karakter ilegal dari data. 


// filter_var(variabel, Jenis cek yang akan digunakan)
// untuk memvalidasi dan sanitize data 

// contoh untuk menghapus semua tag HTML dari sebuah string 
$str = "<h1>Hello World</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr . "<br>";

// contoh untuk memvalidasi bilangan bulat 
$int = 100;
if(filter_var($int, FILTER_VALIDATE_INT) || $int === 0) {
  echo "Integer is valid <br>";
} else {
  echo "Integer is not valid <br>";
}

// validasi email
$email = "ssrah@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Email valid <br>";
} else {
  echo "Email not valid <br>";
}

// validasi url
$url = "https://ssrahcantikk.com";
if(filter_var($url, FILTER_VALIDATE_URL)) {
  echo "url valid";
} else {
  echo "url not valid";
}

?>

<html>
<body>
 <table border="1">
   <tr>
     <td>Filter Name</td>
     <td>Filter Id</td>
   </tr>
<?php
foreach (filter_list() as $id => $filter) {
  echo "<tr><td>". $filter . "</td><td>". filter_id($filter). "</td></tr>";
}

?>
 </table>
</body>
</html>
