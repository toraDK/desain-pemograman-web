<?php
// Menghubungkan ke database (asumsi koneksi.php sudah benar)
include "koneksi.php";

// Mengambil data username dan password dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// Query SQL untuk memeriksa username dan password
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);


// Mengambil data baris pertama hasil query
$row = mysqli_fetch_assoc($result);


// Memeriksa level pengguna dan mengarahkan ke halaman yang sesuai
if ($row['level'] == 1) {
    echo "Anda berhasil login. Silahkan menuju: ";
    echo "<a href='homeAdmin.html'>Halaman HOME Admin</a>";
} elseif ($row['level'] == 2) {
    echo "Anda berhasil login. Silahkan menuju: ";
    echo "<a href='homeGuest.html'>Halaman HOME Guest</a>";
} else {
    echo "Anda gagal login. Silahkan ";
    echo "<a href='loginForm.html'>Login kembali</a>";
}

// Menampilkan pesan error jika terjadi kesalahan koneksi ke database
echo mysqli_error($connect);
?>