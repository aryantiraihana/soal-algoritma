<!DOCTYPE html>
<html>
<head>
    <title>Cek Gaji Lembur</title>
    <style>
        .card{
            background-color: '#d9d9d9';
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="card">
        <form action="" method="post">
            <?php
                echo "<b>Input Jam Lembur</b><br><br>";
                echo "<label for='number'>Jam Lembur :\n</label>";
                echo "<input type='number' id='number' name='number' placeholder='Masukkan Angka\n' required><br>";
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

    if($number < 6){
        $gaji_lembur = "Rp. 100.000" ;   
    } else if ($number == 6){
        $gaji_lembur = "Rp. 200.000" ; 
    } else {
        $gaji_lembur = "Rp. 300.000" ;
    }

    echo "<br>";
    echo "Gaji Lembur Sebesar " . $gaji_lembur;
} 

?>


