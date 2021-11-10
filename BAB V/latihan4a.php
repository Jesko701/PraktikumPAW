<?php 
$angkaAwal = 0;
$angkaKedua = 1;
$myNumber = 6;

function fibonacci ($angka){
    $number=0;
    global $angkaAwal, $angkaKedua;
    if ($angka === $angkaAwal) {
        return 0;
    } else if ($angka === $angkaKedua) {
        return 1;
    } else {
        $number = fibonacci($angka-2) + fibonacci($angka-1);
        return $number;
    }
}
echo "Deret Fibonacci ke $myNumber adalah ", fibonacci($myNumber);
?>