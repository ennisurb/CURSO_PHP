<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero"> Numero a multiplicar: </label>
        <input type="number" name="multiplicador"> 
        <input type="submit" value="Enviar">    
    </form>
    <?php
     if (isset($_POST['multiplicador'])) 
        {
          $numero= $_POST['multiplicador'];

          if (empty($numero)) {
                echo "Numero obligatorio";
            }    
          else
          {
            echo "Tabla de multiplicar del $numero:", '<br>';

            // Iteramos desde 1 hasta 10 para calcular los productos
            for ($i = 1; $i <= 10; $i++) 
            {
                    $producto = $numero * $i;
                    echo "$numero x $i = $producto" ,'<br>';
                }            
          }

        }
        ?>
               

</body>
</html>