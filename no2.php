<!DOCTYPE html>
<html>
<head>
    <title>Mencari Total Detik</title>
</head>
<body>

<form action="" method="post">
        <?php
            echo "<b>Input Bilangan</b><br><br>";
            echo "<label for='a'>Bilangan ke-1 :\n</label>";
            echo "<input type='number' id='a' name='a' placeholder='Masukkan bilangan\n' min='0' required><br>";
            echo "<label for='b'>Bilangan ke-2 :\n</label>";
            echo "<input type='number' id='b' name='b' placeholder='Masukkan bilangan\n' min='0' required><br>";
            echo "<label for='c'>Bilangan ke-3 :\n</label>";
            echo "<input type='number' id='c' name='c' placeholder='Masukkan bilangan\n' min='0' required>";
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
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    //menampilkan data
    echo "<br>";
    if ($a > $b && $a > $c){
        echo $a . "\nbilangan terbesar";
    } else if ($b > $a && $b > $c){
        echo $b . "\nbilangan terbesar";
    } else {
        echo $c . "\nadalah bilangan terbesar";
    }
} 

?>


