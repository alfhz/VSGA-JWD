<?php
function hitungDiskon($totalBelanja){
    $diskon=0;
    if ($totalBelanja >= 100000 ) {
        $diskon = 0.1 * $totalBelanja;
    } elseif ($totalBelanja >= 50000 and $totalBelanja < 100000) {
        $diskon = 0.05 * $totalBelanja;
    } else {
        $diskon = 0;
    }
    return $diskon;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $totalBelanja = $_POST['inputHarga'];
    $diskon = hitungDiskon($totalBelanja);
    $hargaAkhir = $totalBelanja - $diskon;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diskon</title>
    <style>
        body {
            text-align: center;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #dfdf;
        }
    </style>
</head>
<body>
    <h2><u>HASIL DISKON</u></h2>
    <p>Total belanja: <strong>Rp. <?php echo($totalBelanja); ?></strong></p>
    <p>Diskon: <strong>Rp. <?php echo($diskon); ?></strong></p>
    <p>Total yang harus dibayar: <strong>Rp. <?php echo($hargaAkhir); ?></strong></p>
    <br>
    <a href="input_harga.php">Kembali</a>
</body>
</html>
