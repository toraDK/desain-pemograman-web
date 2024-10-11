<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut varius diam ex, a venenatis risus blandit sit amet. Nunc et commodo massa. Morbi vel turpis aliquam, lobortis metus vel, laoreet erat. Nulla mollis sem arcu, et elementum arcu maximus nec. Donec vitae ante sed est vulputate varius et in nulla.";

echo "<p>$loremIpsum</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>