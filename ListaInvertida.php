<?php
function listaInvertida($array) {
    $inversa = array_reverse($array); 
    return $inversa;
}


$array = [1, 2, 3, 4, 5, 6 ,7 ,8, 9, 10];
print_r(listaInvertida($array));
?>
