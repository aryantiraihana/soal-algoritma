<!DOCTYPE html>
<html>
<head>
    <title>Cek Gaji Lembur</title>
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
                echo "<b>Input Tinggi Air</b><br><br>";
                echo "<label for='number'>Tinggi Air (m) :\n</label>";
                echo "<input type='float' id='number' name='number' placeholder='Masukkan Angka\n' required><br>";
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
    $number = $_POST['number'];

    if($number <= 500.0){
        $status = "Status AMAN";
    } else if ($number > 500.0 && $number <= 600.0){
        $status = "Status WASPADA";
    } else if ($number > 600.0 && $number <= 650.0){
        $status = "Status SIAGA 1";
    } else {
        $status = "Status SIAGA 2";
    }
    
    echo "<br>";
    echo "Tinggi Air : " . $number . "\nm";
    echo "<br>";
    echo $status;
} 

?>


