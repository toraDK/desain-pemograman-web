<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Dosen</title> </head>
<body>
    <?php
    $dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo "Nama: " . $dosen['nama'] . "<br>";
    echo "Domisili: " . $dosen['domisili'] . "<br>";
    echo "Jenis Kelamin: " . $dosen['jenis_kelamin'] . "<br>";
    ?>
</body>
</html>