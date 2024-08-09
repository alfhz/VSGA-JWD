<?php
// periksa apakah ada parameter 'status' dalam URL
$status = isset($_GET['status']) ? $_GET['status'] : '';

// tentukan output berdasarkan status
if ($status == 'sukses') {
    echo '<div class="message sukses">Data sukses dikirim!</div>';
} else {
    echo '<div class="message gagal">Data gagal dikirim. Silakan coba lagi.</div>';
}
?>