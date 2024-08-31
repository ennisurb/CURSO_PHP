<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $suma = $num1 + $num2;
        echo "La suma de $num1 y $num2 es: $suma";
    }
    <a href="index.html">Volve al menú</a>
    ?>