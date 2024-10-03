<?php
function verificarNumero($numero) {
//echo "función: verificarNumero()". "<br>";

// Verificar si el número es un entero mayor que 1
    if (!is_int($numero) || $numero <= 1) {
        return [false, false];
    }

    // Determino si el número es primo
    $esPrimo = true;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }

    // Determino si el número es par o impar
    $paridad = ($numero % 2 == 0) ? "par" : "impar";

    return [$esPrimo, $paridad];
}
?>

