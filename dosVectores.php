<?php
// Arreglo original con 20 números enteros (puedes modificar los valores)
$numeros = [12, 65, 34, 87, 21, 50, 78, 9, 45, 61, 32, 75, 18, 55, 29, 80, 42, 67, 38, 59];

// Arreglos para almacenar los resultados
$menores_a_50 = [];
$mayores_iguales_a_50 = [];

// Recorremos el arreglo original y clasificamos los valores
foreach ($numeros as $n) {
    if ($n < 50) {
        $menores_a_50[] = $n;
    } else {
        $mayores_iguales_a_50[] = $n;
    }
}

// Imprimimos los resultados (puedes personalizar la salida)
echo "Números menores a 50: ";
print_r($menores_a_50);
echo "<br>";

echo "Números mayores o iguales a 50: ";
print_r($mayores_iguales_a_50);
?>