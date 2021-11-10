<?php 
    function get_max() {
        $cek = 0;
        for ($i = 0; $i<func_num_args(); $i++){
            if (func_get_arg($i) > $cek){
                $cek = func_get_arg($i);
            }
        }
        return $cek;
    }

  echo get_max(10, 20), "<br>";        // Output: 20
  echo get_max(10, 20, 30), "<br>";    // Output: 30
  echo get_max(10, 20, 30, 40), "<br>"; // Output: 40
?>