<?php
echo "Triangle Upside Left";
echo "<br><br>";
function TriangleUpsideLeft($baris) {
    for ($i = $baris; $i >= 1; $i--) {
        for ($j = $i; $j <= $baris; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
$baris = 5; // jumlah baris
TriangleUpsideLeft($baris);
?>