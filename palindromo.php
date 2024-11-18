<?php

function esPalindromo($cadena) {
    // Convierto a minisculass y elimino espacios y caracteres
    $cadena = strtolower(str_replace(' ', '', $cadena));

    // comparo la cadena original con la cadena invertida
    return $cadena == strrev($cadena);
}

//Uso

$texto = "Pedro pasó por su casa";

if (esPalindromo($texto)) {
    echo "El texto '$texto' es palíndromo";
} else {
    echo "El texto '$texto' no es palíndromo";
}

?>