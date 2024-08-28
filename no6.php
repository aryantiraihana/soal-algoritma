<!DOCTYPE html>
<html>
<head>
    <title>Input Data Nilai</title>
    <style>
        .form-group{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<form action="" method="post">
        <?php
            echo "<b>Input Data Nilai Siswa</b>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='score$i'>Nilai Siswa ke-$i :\n</label>";
                echo "<input type='number' id='score$i' name='scores[]' placeholder='Masukkan nilai\n' min='0' required>";
                echo "<br>";
                echo "</div>";
            }
        ?>
        <input type="submit" value="Kirim">
    </form>

</body>
</html> 

<?php

// cek jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil data dari form
    $scores = $_POST['scores'];

    $highscore = max($scores);
    $highest_count = 0;

    foreach ($scores as $score){
        if($score == $highscore){
            $highest_count++;
        }
    }

    // menampilkan data
    echo "<h2>Data yang diinput : </h2>";
    echo "<ul>";
    foreach ($scores as $score) {
        echo "<li>" . htmlspecialchars($score) . "</li>";
    }
    echo "</ul>";

    echo "Nilai terbesar :\n" . $highscore;
    echo "<br>";
    echo "Jumlah siswa yang mendapat nilai tertinggi :\n" . $highest_count;

} 

?>


