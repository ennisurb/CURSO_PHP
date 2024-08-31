
<?php

   // $arreglo = array("Maria","pedro", "josé");
   //arreglo asociativo en PHP
   $producto =[
    "cod"=>"123",
    "descripcion"=> "Lapiz",
    "precio"=>1.5 ,
   ];

    echo $producto["cod"];
    echo '<br>';
    var_dump($producto);
        
   foreach ($producto as $clave =>  $valor) {
    echo "La clave es: $clave y el valor es: $valor <br>";
    }
    
    
    
?>
