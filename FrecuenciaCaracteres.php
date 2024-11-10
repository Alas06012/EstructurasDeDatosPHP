<?php

function frecuenciaCaracteres($texto) {
    $frecuencia = [];

    for ($i = 0; $i < strlen($texto); $i++) {
        $caracter = $texto[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++; // Incrementamos la frecuencia si el carácter ya existe
        } else {
            $frecuencia[$caracter] = 1; // Iniciamos la frecuencia si es la primera vez que aparece
        }
    }

    return $frecuencia;
}

$texto = "Diego Alexander Alas Morales";
print_r(frecuenciaCaracteres($texto)); 
?>
