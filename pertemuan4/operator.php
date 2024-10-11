<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "hasil dari $a ditambah $b adalah $hasilTambah<br>";
echo "hasil dari $a dikurang $b adalah $hasilKurang<br>";
echo "hasil dari $a dikali $b adalah $hasilKali<br>";
echo "hasil dari $a dibagi $b adalah $hasilBagi<br>";
echo "hasil sisa bagi dari $a dibagi $b adalah $sisaBagi<br>";
echo "hasil pangkat dari $a dipangkatkan dengan $b adalah $pangkat<br>";

echo "<hr>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "jika hasil nya 1 maka benar jika hasilnya kosong maka salah<br>";
echo "$a == $b : $hasilSama<br>";
echo "$a != $b : $hasilTidakSama<br>";
echo "$a < $b  : $hasilLebihKecil<br>";
echo "$a > $b  : $hasilLebihBesar<br>";
echo "$a <= $b : $hasilLebihKecilSama<br>";
echo "$a >= $b : $hasilLebihBesarSama<br>";

echo "<hr>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "jika hasil nya 1 maka benar jika hasilnya kosong maka salah<br>";
echo "$a && $b : $hasilAnd<br>";
echo "$a || $b : $hasilOr<br>";
echo "hasilNotA : $hasilNotA<br>";
echo "hasilNotB : $hasilNotB<br>";

echo "<hr>";

$tambah = $a += $b;
$kurang = $a -= $b;
$kali = $a *= $b;
$bagi = $a /= $b;
$modulus = $a %= $b;
echo "10 dijumlah(+=) 5 adalah $tambah<br>";
echo "10 dikurangi(-=) 5 adalah $kurang<br>";
echo "10 dikali(+=) 5 adalah $kali<br>";
echo "10 dibagi(+=) 5 adalah $bagi<br>";
echo "10 dimodulus(+=) 5 adalah $modulus<br>";

echo "<hr>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "identik : ";
var_dump($hasilIdentik);
echo "<br>";
echo "Tidak identik : ";
var_dump($hasilTidakIdentik);
?>