<?php
$host = "127.0.0.1";
$user = "root"; // Ganti dengan username yang sesuai
$password = "1234"; // Ganti dengan password yang sesuai
$database = "sekolah"; // Ganti dengan nama database yang sesuai

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Contoh query 
$sql = "SELECT * FROM siswa";
$result = mysqli_query($conn, $sql);

// Mengambil hasil query
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["nik"] . ", Nama: " . $row["nama_siswa"] . "<br>";
    }
} else {
    echo "Tidak ada data.";
}

// Menutup koneksi
mysqli_close($conn);
?>

