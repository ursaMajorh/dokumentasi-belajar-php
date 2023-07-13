<?php

// syntax 
// date(format, timestamp)
// format : Menentukan format timestamp (required) 
// timestamp : Menentukan timestamp. default-nya adalah 
//             tanggal dan waktu saat ini
// timestamp adalah representasi angka yang menunjukkan waktu tertentu 


// get date 
// d - Mewakili hari dalam sebulan (01 hingga 31)
// m - Mewakili bulan (01 hingga 12)
// Y - Mewakili tahun (dalam empat digit)
// l (huruf kecil 'L') - Mewakili hari dalam seminggu

echo "<b> Get date </b><br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br><br>";

// get time 
// H - format 24 jam dari satu jam (00 hingga 23) 
// h - format 12 jam dari satu jam (01 hingga 12) 
// i - Menit (00 hingga 59)
// s - Detik (00 hingga 59)
// a - lowercase (am atau pm)

echo "<b>Get time</b><br>";
echo "The time is " . date("h:i:sa") . "<br><br>";

// mktime()
// mktime(hour, minute, second, month, day, year)
// untuk mengatur timestamp berdasarkan nilai yang ditetapkan
echo "<b>mktime</b><br>";

$d = mktime(05, 03, 29, 07, 04, 2023);
echo date("Y.m.d (H:i:s)", $d);

// strtotime
// untuk mengkonversi string date yang bisa dibaca manusia 
// menjadi sebuah timestamp unix (jumlah detik sejak
// 1 Januari 1970 00:00:00 GMT)

echo "<br><br><b>strtotime()</b><br>";
$d = strtotime("10:30pm April 15 2014");
echo date("Y.m.d (h:i:sa)", $d) . "<br>";

echo "Sekarang adalah tanggal " . date("d") . " dan 6 Hari berikutnya adalah tanggal: <br>";
$startdate = strtotime("Now");
$enddate = strtotime("+6 day", $startdate);
while($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 day", $startdate);
}

$days = ceil((strtotime("December 30") - time())/60/60/24);
echo "Ada $days hari menuju tanggal 30 Desember";


?>
