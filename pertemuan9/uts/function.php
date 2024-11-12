<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil input dari form
    $numbers = [
        $_POST['num1'],
        $_POST['num2'],
        $_POST['num3'],
        $_POST['num4'],
        $_POST['num5']
    ];

    // Mengurutkan angka
    sort($numbers);

    // Mendapatkan 2 angka terkecil dan 2 angka terbesar
    $smallest = array_slice($numbers, 0, 2); // 2 terkecil
    $largest = array_slice($numbers, -2); // 2 terbesar

    // Menggabungkan dan mengurutkan hasilnya
    $result = array_merge($largest, $smallest);
    sort($result);

    // Menampilkan hasil
    echo "<h2>4 Angka Setelah Pengurutan:</h2>";
    echo "<p>" . implode(", ", $result) . "</p>";
}
?>
