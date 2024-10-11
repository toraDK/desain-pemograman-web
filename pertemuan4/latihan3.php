<?php 

$hargaProduk = 120000;

if($hargaProduk > 100000){
    $hargaDiskon = $hargaProduk * 20 /100;
    $hargaProduk -= $hargaDiskon;
}

echo"harga : $hargaProduk";

?>