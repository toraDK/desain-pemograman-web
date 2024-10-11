<?php

$input = '';
$pesan = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
        $pesan = "memasukkan '$email' berhasil";
    } else {
        // Tangani input yang tidak valid
        $pesan = "'$email' tidak valid";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="input">input: </label>
        <input type="text" name="input" id="input"><br>
        <label for="email">email: </label>
        <input type="text" name="email" id="email"><br>
        <button type="submit">submit</button>
    </form>

    <br>

    <p>inputan : <?php echo "$input" ?></p>
    <p>email   : <?php echo "$pesan" ?></p>
</body>
</html>