<!DOCTYPE html>
<html>
<head>
    <title>Mi página PHP</title>
</head>
<body>
    <h1>¡Hola, mundo!</h1>
    <?php
     
    echo "hola mundo";
    echo '<br>';
    //declaración de variables
    $nombre="Jose";
    $edad=15;
    $estatura=1.62;
    $casado=true;
    echo $nombre;
    echo '<br>';
    echo $casado;
    echo '<br>';
    echo $edad;
    echo '<br>';
    echo $estatura;
    echo '<br>';
    echo "casado es falso por eso no se mostará";
    $casado= false;
    echo '<br>';
    echo $casado;
    echo '<br>';
    echo "Tipos de datos", '<br>';
    var_dump($nombre); 
    echo '<br>';
    var_dump ($edad);
    echo '<br>';    
    var_dump($estatura);
    echo '<br>';
    var_dump ($casado);
    
    echo '<br>';
    echo "Tipos de datos con comando gettype", '<br>';
    echo (gettype($edad));
    echo '<br>';
 ?>
<a href="index.html">Volver al menú</a>
   
</body>
</html>
