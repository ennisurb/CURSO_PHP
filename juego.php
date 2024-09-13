<?php
$cont=0;
$color_pc= array(0,0,0);
//$color_user= array();

for ($i=0;$i<3;$i++)
{
    $aleatorio=rand(1,5);
    while( (array_search($aleatorio,$color_pc)))
    {
       $aleatorio=rand(1,5);
       
    }
    
    $color_pc[$i]= $aleatorio ; 
}
//print_r($color_pc);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color_user= array_values($_POST);
    }

   foreach ($color_user as $x){
    if (array_search($x,$color_pc))
        {
            $cont++;

        }
    }
    // echo "acertaste colores" , $cont;
     echo "<a href='JuegoAzar.html.php?resultado=$cont'>Ver resultado</a>";

print_r($color_user);

/* for ($i=0;$i<3;$i++)
{
  if ($color_pc[$i]==$color_user[$i])
  {
    $cont++;
  }
   
}
 */
//<a href="index.html">Volve al menú</a>
//$existe = in_array("Banana", $frutas);
//echo $existe ? "Banana existe en el array" : "Banana no existe en el array";


    
?>