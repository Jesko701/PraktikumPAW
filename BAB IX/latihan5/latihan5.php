<?php
if (isset($_POST['mengkirimkan'])) {
    $nama = $_POST['nama'];
    $komentar = $_POST['mengkoment'];

    $gabung = $nama . ";" . $komentar;

    $buku = "guestbook.txt";
    $fileHandler = fopen($buku, "w");
    $misah = explode(";", $gabung);
    for ($i = 0; $i < sizeof($misah); $i++) {
        fwrite($fileHandler, $misah[$i] . " ");
    }
    fclose($fileHandler);
}
header("Location: latihan5.html");
