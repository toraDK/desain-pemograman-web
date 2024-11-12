<?php
// Memulai sesi
session_start();

// Mendefinisikan variabel sesi
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

// Menampilkan pesan konfirmasi
echo "Session variables are set.";
?>