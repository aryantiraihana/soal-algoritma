<!DOCTYPE html>
<html>
<head>
    <title>Periksa Angka</title>
</head>

<body>
    <style>
        .card{
            background-color: '#d9d9d9';
            align-items: center;
        }
    </style>
    <div class="card">
        <form action="" method="post">
            <?php
                echo "<b>Saklar Lampu</b><br><br>";
                echo "<label for='number'>Saklar Lampu (ON/OFF) :\n</label>";
                echo "<input type='number' id='saklar' name='saklar' placeholder='Masukkan Angka\n' required><br>";
                echo "<br>";
            ?>
            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html> 

<?php

// cek jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil data dari form
    $saklar = $_POST['saklar'];

    if($saklar == 1){
        echo "Saklar ON";
    } else if($saklar == 0){
        echo "Saklar OFF";
    } else {
        echo "Tidak terdeteksi";
    }


} 

?>


