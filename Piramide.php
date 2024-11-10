<?php
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios a la izquierda para centrar la pirámide
        echo str_repeat(" ", $altura - $i);

        // Imprimir asteriscos
        echo str_repeat("*", 2 * $i - 1);

        // Nueva línea después de cada nivel de la pirámide
        echo PHP_EOL;
    }
}

imprimirPiramide(10);
?>
