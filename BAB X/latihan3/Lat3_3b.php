<?php

session_start();

function faktorial($nilai = 1)
{
    $akhir = 1;
    for ($i = $nilai; $i >= 1; $i--) {
        $akhir *= $i;
    }
    return $akhir;
}

$_SESSION['Hasil'] = array($_POST["Nama"], $_POST["NIM"], $_POST["Angka"], faktorial($_POST["Angka"]));
header("Location: Lat3_3c.php");
