<?php
// Menghubungkan ke database (asumsi koneksi.php sudah benar)
require "koneksi.php";

// Mengambil data username dan password dari form
$username = $_POST['username'];
$password = md5($_POST['password']); // Menggunakan MD5 untuk enkripsi password

// Query SQL untuk memeriksa username dan password
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

// Eksekusi query
$result = mysqli_query($connect, $query);

// Menghitung jumlah baris hasil query
$cek = mysqli_num_rows($result);

// Jika ditemukan data yang cocok (login berhasil)
if ($cek > 0) {
    echo "Anda berhasil login. Silahkan menuju: ";
    echo "<a href='homeAdmin.html'>Halaman HOME</a>";
} else { // Jika tidak ditemukan data (login gagal)
    echo "Anda gagal login. Silahkan ";
    echo "<a href='loginForm.html'>Login kembali</a>";
}

// Menampilkan pesan error jika terjadi kesalahan koneksi ke database
echo mysqli_error($connect);
?>