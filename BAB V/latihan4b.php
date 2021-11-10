<?php 
    function pangkat($a, $b = 1){
        if ($b !== 0){
            return ($a * pangkat($a,$b-1));
        } else {
            return 1;            
        }
    }
    echo pangkat(5,3);
?>