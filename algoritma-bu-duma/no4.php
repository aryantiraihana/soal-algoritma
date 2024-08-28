<!DOCTYPE html>
<html>
<head>
    <title>Total Harga Barang</title>
</head>
<body>

<form action="" method="post">
        <?php
            echo "<b>Input Harga Ketiga Barang</b><br><br>";
            echo "<label for='a'>Harga barang ke-1 :\n</label>";
            echo "<input type='number' id='a' name='a' placeholder='Masukkan harga\n' min='0' required><br>";
            echo "<label for='b'>Harga ke-2 :\n</label>";
            echo "<input type='number' id='b' name='b' placeholder='Masukkan harga\n' min='0' required><br>";
            echo "<label for='c'>Harga ke-3 :\n</label>";
            echo "<input type='number' id='c' name='c' placeholder='Masukkan harga\n' min='0' required>";
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
    $total_price = $a + $b + $c;
    if($total_price > 100000){
        $disc = $total_price * 0.1;
        $final_price = $total_price - $disc;
        echo "Total Harga : " . $total_price;
        echo "<br>";
        echo "Diskon : " . $disc;
        echo "<br>";
        echo "Harga Akhir : " . $final_price;
    } else {
        echo "Total Harga : " . $total_price;
    }
} 

?>


