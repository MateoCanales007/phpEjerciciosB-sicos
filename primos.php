<?php

function esPrimo ($numero) {
    // Condicion de que si es menor o igual a 1 no es primo
    if ($numero <= 1)
    return false;

    // verificamos la divisibilidad de 2 hasta la raíz cuadrada
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0)
        return false;
    }
    // Si no encuentra divisores, es primo
    return true;
}

//Uso

$numero = 17;

if (esPrimo($numero)) {
    echo "El número $numero es primo";
} else {
    echo "El número $numero no es primo";
}

?>