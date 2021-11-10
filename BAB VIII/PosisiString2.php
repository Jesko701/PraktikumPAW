<?php

function searchingIndex($index, $searching, $cari = 0){
    for ($i = $index; $i < strlen($searching); $i++){
        if ($cari == $searching[$i])
        return $i;
    }
    return "Nothing";
}
$numberedString = "1234567890123456789012345678901234567890";
$fivePos =  searchingIndex(0,$numberedString,5);
echo "The position of 5 in our string was $fivePos";

$fivePos2 = searchingIndex(5,$numberedString,5);
echo "<br>The position of the second 5 was $fivePos2";
