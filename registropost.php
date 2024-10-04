<!DOCTYPE html>
<html>
<head>
    <title>Estructura de un Post </title>
    <link rel="stylesheet" href="cssStyle.css">
</head>
<body>
    
    

    <form  method="POST" action="">
       
            <label for="Codigo">Código</label>
            <input type="text" name="cod"><br>
            <label for="Descripcion">Descripción</label>
            <input type="text" name="descripcion"><br>
            <label for="precio">Precio:</label>
            <input type="number" name="precio"><br>
            <br>
            <br>
                       
            <input type="submit" name= "Enviar"  value="registrar" >
           
          
     </form>
     
     <?php
      if (isset($_POST['Enviar']) )
       {
        var_dump($_POST);
        //print_r($_POST);
       }
      $_POST=[];
    ?> 
   
</body>
</html>