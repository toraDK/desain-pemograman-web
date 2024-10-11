<?php 

$total_kursi = 45;
$suatu_malam = 28;

$kursi_kosong = $total_kursi - $suatu_malam;

$total_persen_kursi = ($kursi_kosong/$total_kursi) * 100;

echo "total kursi adalah $total_persen_kursi %";

?>