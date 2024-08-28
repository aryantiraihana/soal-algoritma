<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Juara Kelas</title>
</head>
<body>

    <form action="" method="post">
        <?php
            echo "Form Input Nilai Siswa";
            echo "<br>";
            for ($i = 0; $i < 2; $i++){
                echo "<label for='students$i'>Nama Siswa :\n</label>";
                echo "<input type='text' id='students$i' name='students[$i][name]' placeholder='Masukkan Nama Siswa' required><br>";

                echo "<label for='students$i'>Nilai MTK :\n</label>";
                echo "<input type='number' id='students_mtk$i' name='students[$i][mtk]' placeholder='Masukkan Nilai MTK'required ><br>";

                echo "<label for='students$i'>Nilai B.Indo :\n</label>";
                echo "<input type='number' id='students_indo$i' name='students[$i][indo]' placeholder='Masukkan Nilai B. Indo' required><br>";

                echo "<label for='students$i'>Nilai Inggris :\n</label>";
                echo "<input type='number' id='students_inggris$i' name='students[$i][inggris]' placeholder='Masukkan Nilai Inggris' required><br>";

                echo "<label for='students$i'>Nilai DPK :\n</label>";
                echo "<input type='number' id='students_dpk$i' name='students[$i][dpk]' placeholder='Masukkan Nilai DPK' required><br>";

                echo "<label for='students$i'>Nilai Agama :\n</label>";
                echo "<input type='number' id='students_agama$i' name='students[$i][agama]' placeholder='Masukkan Nilai Agama' required><br>";

                echo "<label for='students$i'>Nilai Kehadiran :\n</label>";
                echo "<input type='number' id='students_kehadiran$i' name='students[$i][kehadiran]' placeholder='Masukkan Nilai Kehadiran' required><br>";
                echo "<br><br>";
            }
            
        ?>
        <input type="submit" value="Cek Juara">
    </form>
</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $students = $_POST['students'];

    $topstudents = [];
    $score_average = [];
    foreach($students as $i => $student){

        $name = htmlspecialchars($student['name']);
        $mtk = htmlspecialchars($student['mtk']);
        $indo = htmlspecialchars($student['indo']);
        $inggris = htmlspecialchars($student['inggris']);
        $dpk = htmlspecialchars($student['dpk']);
        $agama = htmlspecialchars($student['agama']);
        $kehadiran = htmlspecialchars($student['kehadiran']);

        $score_average = $mtk + $indo + $inggris + $dpk + $agama;
    
        if ($score_average >= 475 && $kehadiran == 100){
            $topstudents[] = $name;
        } 

    }

    if (count($topstudents) > 0){
        echo "<br>";
        echo "Juara Kelas :";
        echo "<ul>";
        foreach ($topstudents as $topstudent){
            echo "<li>" . $topstudent . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Tidak ada juara kelas.";
    }

} 

?>
