<?php

/* *
 * Genera los primeros n términos de la serie Fibonacci.
 * 
 * int $n número de términos a generar
 * Array con los términos de la serie Fibonacci
 */

function generarFibonacci($n) {
    $fibonacci = array(0, 1); // Casos base

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

//Uso
$n = 10;
$resultado = generarFibonacci($n);
echo "Los primeros $n números de la serie de Fibonacci son: " .implode (", ", $resultado);

?>