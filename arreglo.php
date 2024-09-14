<?php
   // $arreglo = array("Maria","pedro", "josé");
   $arreglo = array(12,15,18,20,5);
    var_dump($arreglo);
     
    $suma = 0;
    
    foreach ($arreglo as $x) {
        $suma += $x;
    }
    echo "La suma de los números es: " . $suma;
    //echo "La suma de los números es: " , array_sum($arreglo);
   
    
?>
