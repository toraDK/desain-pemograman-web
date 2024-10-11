<?php 

$nilaiUjian = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiUjian);
array_splice($nilaiUjian, 0, 2);
array_splice($nilaiUjian, -2);

$nilaiTotal = 0;

foreach($nilaiUjian as $nilai){
    $nilaiTotal += $nilai;
}

$jumlahSiswa = count($nilaiUjian);

$rataRata =  $nilaiTotal / $jumlahSiswa;

echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: $nilaiTotal<br>";
echo "Rata-rata nilai: $rataRata";
?>