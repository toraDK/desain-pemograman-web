<?php
// Memulai sesi
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Menampilkan nilai variabel sesi
echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
echo "Favorite animal is " . $_SESSION["favanimal"];
?>

</body>
</html>