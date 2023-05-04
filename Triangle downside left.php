<?php
echo "Triangle Downside Left";
echo "<br><br>";
function TriangleDownsideLeft($baris) {
    for ($i = $baris; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
$baris = 5; // jumlah baris
TriangleDownsideLeft($baris);
?>