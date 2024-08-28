<!DOCTYPE html>
<html>
<head>
    <title>Mencari Total Detik</title>
</head>
<body>

<form action="" method="post">
        <?php
            echo "<b>Kalkulasi Jam - Menit - Detik</b><br><br>";
            echo "<label for='jam'>Jam :\n</label>";
            echo "<input type='number' id='jam' name='jam' placeholder='Masukkan jam\n' min='0' required><br>";
            echo "<label for='menit'>Menit :\n</label>";
            echo "<input type='number' id='menit' name='menit' placeholder='Masukkan menit\n' min='0' required><br>";
            echo "<label for='detik'>Detik :\n</label>";
            echo "<input type='number' id='detik' name='detik' placeholder='Masukkan detik\n' min='0' required>";
            echo "<br>";
        ?>
        <input type="submit" value="Kirim">
    </form>

</body>
</html> 

<?php

// cek jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil data dari form
    $j = $_POST['jam'];
    $m = $_POST['menit'];
    $d = $_POST['detik'];

    // menampilkan data
    echo "<br>";
    $total_detik = $j * 3600 + $m * 60 + $d;
    echo "Total\n" . $total_detik . "\ndetik";

} 

?>


