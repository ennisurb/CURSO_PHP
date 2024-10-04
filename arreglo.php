<?php
   $nombres = ["Maria","pedro", "josé"];
   $horas = [45,140,18];
       
     
    for ($i=0; $i<count($horas);$i++)
    {
        if ($horas[$i]<=40) 
        {
            $pago = ($horas[$i]*20);
        }
        else
        {
            $pago = 40*20 + ((($horas[$i]-40)*25));  
        }
        echo "El sr. $nombres[$i] cobrará  $pago", "<br>";  
    }
    
    //echo "La suma de los números es: " , array_sum($arreglo);
   
    
?>
