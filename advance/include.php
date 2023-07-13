
<h1>include & Require</h1>
<?php 

include 'date.php';
echo $days;

// include & require sama sama  digunakan untuk 
// menyertakan file eksternal ke dalam file saat ini

// perbedaan 
// Jika file yang di-require tidak ditemukan, PHP akan
// menghasilkan kesalahan fatal (fatal error) dan menghentikan eksekusi 
// skrip. sementara menggunakan statement 'include', pesan kesalahan
// akan ditampilkan, tetapi skrip akan tetap berlanjut.

?>
