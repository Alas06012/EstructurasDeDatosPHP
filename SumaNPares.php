<?php
function sumaNumerosPares($array) {
    $suma = 0;
    $string = "";

    foreach ($array as $numero) {
        if ($numero % 2 == 0) { // Verificamos si el número es par
            $suma += $numero; // Sumamos el número si es par
            $string .= $numero . " + \n"; // Concatenamos el número con el operador .=
        }
    }

    return $string . "----------\n" . $suma;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo sumaNumerosPares($array); 
?>

