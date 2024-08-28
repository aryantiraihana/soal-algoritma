<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Diskon</title>
</head>
<body>

<form action="" method="post">
        <?php
            echo "<b>Input Total Buku</b><br><br>";
            echo "<label for='books'>Total Buku :\n</label>";
            echo "<input type='number' id='books' name='books' placeholder='Masukkan Total Buku\n' min='0' required><br>";
            echo "<br>";
        ?>
        <input type="submit" value="Kirim">
    </form>

</body>
</html> 

<?php
// 1 buku = 10 eks
// 1 eks = 5rb

// cek jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil data dari form
    $books = $_POST['books'];

    //deklarasi
    $eksemplar_price = 5000;

    $total_eksemplar = $books * 10;

    $books_price = $total_eksemplar * $eksemplar_price;

    if ($total_eksemplar > 100 && $total_eksemplar <= 200){
        $first_disc = (100 * $eksemplar_price) * 0.05;
        $second_disc = (($total_eksemplar % 100) * $eksemplar_price) * 0.15;
        $total_price = $books_price - ($first_disc + $second_disc);
        echo "Harga awal: " . number_format($books_price, 2, '.', ".");
        echo "<br>";
        echo "Diskon pertama: " . number_format($first_disc, 2, '.', ".");
        echo "<br>";
        echo "Diskon kedua " . number_format($second_disc, 2, '.', ".");
        echo "<br>";
        echo "Total harga " . number_format($total_price, 2, '.', ".");

    } else if ($total_eksemplar > 200){
        $first_disc = (100 * $eksemplar_price) * 0.07;
        $second_disc = (100 * $eksemplar_price) * 0.17;
        $third_disc = (($total_eksemplar - 200) * $eksemplar_price) * 0.27;
        $total_price = $books_price - ($first_disc + $second_disc + $third_disc);
        echo "Harga awal: " . number_format($books_price, 2, '.', ".");
        echo "<br>";
        echo "Diskon pertama: " . number_format($first_disc, 2, '.', ".");
        echo "<br>";
        echo "Diskon kedua " . number_format($second_disc, 2, '.', ".");
        echo "<br>";
        echo "Diskon ketiga " . number_format($third_disc, 2, '.', ".");
        echo "<br>";
        echo "Total harga " . number_format($total_price, 2, '.', ".");
    } else {
        echo "Diskon 0%"    ;
        echo "<br>";
        echo "Total harga " . number_format($books_price, 2, '.', ".");
    }

} 

?>


