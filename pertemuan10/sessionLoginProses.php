<?php
include "koneksi.php"; // Menyertakan file koneksi ke database

// Mengambil data username dan password dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// Query SQL untuk memeriksa username dan password di database
$sql = "SELECT * FROM User WHERE username='$username' and password='$password'";
$result = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($result);

// Jika username dan password ditemukan (cek > 0)
if ($cek > 0) {
    session_start(); // Mulai sesi
    $_SESSION['username'] = $username; // Simpan username dalam sesi
    $_SESSION['status'] = 'login'; // Set status login

    // Tampilkan pesan berhasil login dan link ke halaman home
    echo "Anda Berhasil Login, silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    // Jika username atau password salah, tampilkan pesan gagal login dan link ke form login
    echo "Gagal login, silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
    echo mysqli_error($connect); // Tampilkan pesan error dari database
}
?>