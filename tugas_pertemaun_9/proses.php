<?php
$arrayNama = ["andi", "budi", "ceril", "derry"];

function cariOrang($nama) {
    global $arrayNama;
    if (in_array($nama, $arrayNama)) {
        echo "Nama $nama berhasil ditemukan";
    } else {
        echo "Nama $nama tidak ditemukan";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaCari = $_POST["nama"];
    cariOrang($namaCari);
}

?>
