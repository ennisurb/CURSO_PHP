
<?php

   //recorrido de Diccionario de varios registros
   $usuarios = [
    "usuario1" => [
        "nombre" => "Juan",
        "apellido" => "Pérez",
        "deuda" => 30
    ],
    "usuario2" => [
        "nombre" => "María",
        "apellido" => "García",
        "deuda" => 25
    ]
];
$suma=0;
foreach ($usuarios as $usuario => $datosUsuario) {
    echo "Usuario: " . $usuario . "<br>";
    foreach ($datosUsuario as $clave => $valor) {
        echo "$clave: $valor <br>";
        
    }
    $suma=$suma + $datosUsuario["deuda"];
    echo "<br>";
}
   
  echo "la suma es <br>", $suma;  
    
    
?>
