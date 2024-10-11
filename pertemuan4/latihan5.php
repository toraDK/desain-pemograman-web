<?php 

$daftarNilai = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90]
];

$totalNilai = 0;
$totalMahasiswa = 0;
$totalMahasiswaRata = 0;

foreach($daftarNilai as $nilai){
    $totalNilai += $nilai[1];
    $totalMahasiswa++;
}

$rataRata = $totalNilai / $totalMahasiswa;

echo "nilai rata rata adalah : $rataRata";
echo "berikut mahasiswa yang nilai nya lebih dar nilai rata rata<br>";

foreach($daftarNilai as $mahasiswa){
    if ($mahasiswa[1] > $rataRata) {
        echo "Nama: {$mahasiswa[0]}, nilai: {$mahasiswa[1]} <br>";
    }
}
?>