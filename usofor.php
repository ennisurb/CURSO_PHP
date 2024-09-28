<!DOCTYPE html>
<html>
<head>
    <title>uso del for</title>
    <meta charset="UTF-8">
</head>
<body>

<?php

   
   echo( "Numero del 1 al 10  " );
   for ( $i=1 ; $i<=10 ; $i++ )
   {
         echo $i . '<br>';
   }

   echo( "de tres en tres" );
    for ( $i=3 ; $i<=10 ; $i+=3 )
    {
       echo   $i . '<br>' ;   
   }

    echo( "Regresivo" );
    
    for ( $i=10 ; $i>=0 ; $i--)
    {
       echo   $i . '<br>';
    }  

    echo( "Regresivo de dos en dos" );
    
    for ( $i=10 ; $i>=0 ; $i-=2)
    {
       echo   $i . '<br>';
    }     

   
     

   echo( "\n tabla ascii " );
    
   for ( $i=0 ; $i<=255 ; $i++ ) {
            echo $i, " : ", chr($i) , '<br>';  
    
     }
   
   
?>
</body>
</html>
