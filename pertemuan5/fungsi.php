<?php 

// function perkenalan() {
//     echo "Halo, ";
//     echo "Nama saya Budi<br/>";
//     echo "Saya senang belajar PHP.<br/>";
// }

// perkenalan();

// // Membuat fungsi perkenalan
// function perkenalan($nama, $salam) {
//     echo "$salam, ";
//     echo "Perkenalkan, nama saya $nama<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// // Memanggil fungsi dengan parameter
// perkenalan("Hamdana", "Hallo");

// // Menambahkan garis pemisah
// echo "<hr>";

// // Mendefinisikan variabel
// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// // Memanggil fungsi lagi dengan variabel
// perkenalan($saya, $ucapanSalam);


// // Membuat fungsi perkenalan
// function perkenalan($nama, $salam="Assalamualaikum") {
//     echo "$salam, ";
//     echo "Perkenalkan, nama saya $nama<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// // Memanggil fungsi dengan parameter
// perkenalan("Hamdana", "Hallo");

// // Menambahkan garis pemisah
// echo "<hr>";

// // Mendefinisikan variabel
// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// // Memanggil fungsi lagi dengan variabel
// perkenalan($saya);

// // Membuat fungsi untuk menghitung umur
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// // Memanggil fungsi hitungUmur dan menampilkan hasilnya
// echo "Umur saya adalah " . hitungUmur(1988, 2023) . " tahun";


// Membuat fungsi untuk menghitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Membuat fungsi untuk perkenalan
function perkenalan($nama, $salam="Assalamualaikum") {
    echo "$salam, ";
    echo "Perkenalkan, nama saya $nama<br/>";
    // Memanggil fungsi hitungUmur di dalam fungsi perkenalan
    echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan("Elok");

?>