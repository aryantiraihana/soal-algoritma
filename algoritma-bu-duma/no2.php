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
                echo "<b>Input Angka</b><br><br>";
                echo "<label for='number'>Angka :\n</label>";
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

    if($number == 0){
        echo "Angka tidak boleh nol";
    } else {
        if($number < 0){
            if($number %  2 == 1){
                echo "Bilangan negatif dan bilangan ganjil";
            } else {
                echo "Bilangan negatif dan bilangan genap";
            }
        } else{
            if($number %  2 == 1){
                echo "Bilangan positif dan bilangan ganjil";
            } else {
                echo "Bilangan positif dan bilangan genap";
            }
        }
    }


} 

?>


