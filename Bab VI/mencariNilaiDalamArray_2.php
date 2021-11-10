<?php 
$inputPengguna = $_GET["searching"];
$isi = [123,'tes',456,789,'gtx','rtx','gto'];
$tombol = isset($_GET['SUBMIT']);

function cari ($array, $cari): bool {
    for ($i = 0; $i<count($array); $i++) {
        if ($array[$i] == $cari){
            return true;
        } 
    }
    return false;
};

if ($tombol){
    if (cari($isi, $inputPengguna)){
        echo "Ketemu";
    } else {
        echo "Tidak Ketemu";
    }
}
?>