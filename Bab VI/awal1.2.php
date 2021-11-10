<?php 
$hari = ['Sen' => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
echo $hari["Sen"], PHP_EOL;
for ($i=0; $i < count($hari)-1 ; $i++) { 
    echo $hari[$i], PHP_EOL;
}
?>