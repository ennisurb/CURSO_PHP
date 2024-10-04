<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio del influencer</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero"> Cuanto disponde el influencer: </label>
        <input type="number" name="cantidad"> 
        <input type="submit" value="Enviar">    
    </form>
    <?php
     if (isset($_POST['cantidad'])) 
        {
          $monto= $_POST['cantidad'];

          if (empty($monto)) {
                echo "Monto obligatorio";
            }    
          else
          {
            echo "Inicia la repartición de los $monto", '<br>';

            $edad = rand(1,100);
            $recibe=$edad*10;
            while ($monto>$recibe)
            {
                   
                    $monto=$monto-$edad*10;
                    echo "la edad es $edad se le dan: ",  $edad*10 , " y al influencer le quedan $monto" ,'<br>';
                    $edad = rand(1,100);
                    $recibe=$edad*10;
            }   
           
          }

        }
        ?>
               

</body>
</html>