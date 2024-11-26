<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kado = $_POST['kado']; // Menggunakan input mentah tanpa sanitasi
    $file = 'doa_kamu.txt'; // Nama file untuk menyimpan data

    if (!empty($kado)) {
        // Menyimpan input ke file
        file_put_contents($file, $kado . PHP_EOL, FILE_APPEND);
        exit();
    } else {
        echo "Input tidak boleh kosong!";
    }
}
?>
