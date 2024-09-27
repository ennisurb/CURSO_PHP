<?php


 $edades= array(2,45,12,34,44,56,76,78,23,45);
 echo "el mayor es: " , encontrarMayorNumero($edades);
 echo '<br>';
 echo "El valor máximo es: " . max($edades);
 

 
 function encontrarMayorNumero(array $numeros): int
 {
    
     // Iniciamos el número mayor con el primer elemento del arreglo
     $mayorNumero = $numeros[0];
 
     // Iteramos sobre cada elemento del arreglo
     foreach ($numeros as $numero) {
         // Si el número actual es mayor que el número mayor actual, lo actualizamos
         if ($numero > $mayorNumero) {
             $mayorNumero = $numero;
         }
     }
 
     return $mayorNumero;
 }

?>
