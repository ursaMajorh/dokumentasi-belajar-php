<?php 

// fopen()
// parameter pertama adalah nama file
// parameter kedua adalah modenya, dalam hal ini nilainya adalah "r"
// "r" hanya digunakan untuk mode baca saja 
$file = fopen("webdictionary.txt", "r") or die("Unable to open file!");

// Parameter pertama fread()berisi nama file yang akan dibaca 
// dan parameter kedua menentukan jumlah maksimum byte untuk dibaca.
echo fread($file, filesize("webdictionary.txt"));


echo "<br><br>";


// untuk mengembalikan posisi file pointer ke awal file 
// File pointer menyimpan informasi tentang di mana 
// posisi baca/tulis terakhir dalam file.
rewind($file);



// fgets()
// digunakan untuk membaca satu baris dari sebuah file
echo fgets($file);


rewind($file);
echo "<br><br>";


// feof() 
// untuk memeriksa apakah "end-of-file" (EOF) telah tercapai.
while(!feof($file)) {
  $line = trim(fgets($file));
  if(!empty($line)) {
    echo "<li> ". $line ."</li>";
  }
}


rewind($file);
echo "<br><br>";

// fgetc
// digunakan untuk membaca satu karakter dari sebuah file.
while(!feof($file)) {
  echo "× ". fgets($file) ."<br>";
}

rewind($file);
echo "<br><br>";

echo fgetc($file);

// fclose() 
// untuk menutup file yang terbuka.
fclose($file);
?>
