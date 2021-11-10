<?php
session_start();
if (isset($_SESSION['Hasil'])) {
    print "Nama: " . $_SESSION['Hasil'][0] . "<br>";
    print "NIM: " . $_SESSION['Hasil'][1] . "<br>";
    print "Angka yang dimasukkan: " . $_SESSION['Hasil'][2] . "<br>";
    print "Hasil Faktorial: " . $_SESSION['Hasil'][3];
} else {
    echo "Inputan tidak lengkap";
}
session_destroy();
