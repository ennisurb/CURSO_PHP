<?php


 $edades= array(2,45,12,34,44,56,76,78,23,45);
 echo "el mayor es: " , encontrarMayorNumero($edades);

 
 function encontrarMayorNumero(array $numeros): int
 {
     // Verificamos si el arreglo está vacío
     if (empty($numeros)) {
         throw new Exception("El arreglo está vacío.");
     }
 
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
