<?php

// cookie adalah mekanisme penyimpanan data kecil di 
// sisi klien (misalnya, browser pengguna) yang digunakan 
// untuk menyimpan informasi khusus tentang pengguna atau 
// sesi. Cookie dikirim dari server ke browser melalui 
// protokol HTTP saat pengguna mengakses suatu situs web.

// setcookie(name, value, expire, path, domain, secure, httponly);
// hanya parameter nama yang wajib diisi, yg lainnya opsional

$cookie_name = "user";
$cookie_value = "Porter Robinson";
setcookie($cookie_name, $cookie_value, time() + 86400 * 30, "/");
?>

<html>
<body>
<?php

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set <br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

?>
</body>
</html>
