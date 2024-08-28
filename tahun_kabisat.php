<?php

$a;

echo "List Tahun Kabisat";
echo "<br>";

for ($a = 1600; $a <= 2024; $a++){
    if ($a % 4 == 0) {
        if($a % 400 == 0 || $a % 100 != 0 && $a % 4 == 0){
            echo $a . " tahun kabisat";
            echo "<br>";
        } else {
            echo $a . " tidak termasuk tahun kabisat";
            echo "<br>";
        }
    }
}



?>