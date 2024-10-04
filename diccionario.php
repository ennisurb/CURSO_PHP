
<?php

   
   //arreglo asociativo en PHP
   $producto =[
        "cod"=>"123",
        "descripcion"=> "Lapiz",
        "precio"=>1.5 ,
   ];

    //echo $producto["cod"];
    echo 'con vardump'. '<br>';  
    var_dump($producto);
    echo 'con print_r'. '<br>'; 
    print_r($producto);
    echo '<br>'; 
    echo $producto["cod"];
    echo '<br>';    
   foreach ($producto as $campo =>  $valor) {
    echo "La campo es: $campo y el valor es: $valor <br>";

    }

    
    
    
    
?>
