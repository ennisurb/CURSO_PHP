<?php
   // $arreglo = array("Maria","pedro", "josé");
   $arreglo = array(12,15,18,20,5);
    var_dump($arreglo);
     
    $suma = 0;
    $arreglo[2]=38;
 
    for ($i=0;$i<count($arreglo);$i++)
    {
        $suma=$suma+$arreglo[$i];
    }
     /*  foreach ($arreglo as $x) {
        $suma += $x;
    }*/
    echo "La suma de los números es: " . $suma;
    //echo "La suma de los números es: " , array_sum($arreglo);
   
    
?>
