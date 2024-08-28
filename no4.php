<!DOCTYPE html>
<html>
<head>
    <title>Convert Total Detik</title>
</head>
<body>

<form action="" method="post">
        <?php
            echo "<b>Input Total Detik</b><br><br>";
            echo "<label for='total_seconds'>Total Detik :\n</label>";
            echo "<input type='number' id='total_seconds' name='total_seconds' placeholder='Masukkan Total Detik\n' min='0' required><br>";
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
    $total_seconds = $_POST['total_seconds'];

    $j = floor($total_seconds / 3600);
    $sisa = $total_seconds % 3600;
    $m = floor($sisa / 60);
    $d = $sisa % 60;

    // menampilkan data
    echo "<br>";
    echo $j . " jam " . $m . " menit " . $d . " detik";

} 

?>


