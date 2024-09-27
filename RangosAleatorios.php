<?php
// Inicializamos contadores para cada rango
$rango1 = 0;
$rango2 = 0;
$rango3 = 0;
// Generamos y contamos los números aleatorios
for ($i = 1; $i <= 20; $i++) {
    $numeroAleatorio = rand(1, 100);
    echo $numeroAleatorio . " ";
    if ($numeroAleatorio <= 20) {
        $rango1++;
    } elseif ($numeroAleatorio <= 70) {
        $rango2++;
    } else {
        $rango3++;
    }
}
// Imprimimos los resultados
echo "\nNúmeros entre 1-20: " . $rango1;
echo "\nNúmeros entre 21-70: " . $rango2;
echo "\nNúmeros entre 71-100: " . $rango3;
?>
