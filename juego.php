<?php
$cont=0;
$color_pc= array(-1,-1,-1);
//$color_user= array();

echo '<br>';
for ($i=0;$i<3;$i++)
{
    $aleatorio=rand(1,5);
    echo "el aleatorio es ", $aleatorio, " busqueda " , array_search($aleatorio,$color_pc), '<br>';
    while (array_search($aleatorio,$color_pc )>=0)
    {
       $aleatorio=rand(1,5);
       
    }
    
    $color_pc[$i]= $aleatorio ; 
}
print_r($color_pc);

echo '<br>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
    $color_user= array_values($_POST);
    }

   foreach ($color_user as $x){
    if (array_search($x,$color_pc))
        {
            $cont++;        }
    }
    echo "acertaste colores" , $cont;
    echo '<br>';
   //  echo "<a href='JuegoAzar.html.php?resultado=$cont'>Ver resultado</a>";

print_r($color_user);


echo "<a href='JuegoAzar.html'  >Volve al menú</a>";
//$existe = in_array("Banana", $frutas);
//echo $existe ? "Banana existe en el array" : "Banana no existe en el array";


    
?>