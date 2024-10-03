<?php
// Función del ejercicio anterior
require('verificarNumero.php');
echo "Requerimos verificarNumero.php <br>";

// Función encontrar números primos en un rango dado
function encontrarPrimosEnRango($inicio, $fin) {
    // Creo arreglos para almacenar los números primos, primos pares e impares
    $todosPrimos = [];
    $primosPares = [];
    $primosImpares = [];

    // Valido que los valores de inicio y fin sean enteros mayores que 1
    if (!is_int($inicio) or !is_int($fin) or $inicio < 1 or $fin < 1) {
        echo "Ambos números (inicio y fin) deben ser enteros mayores que 1.";
        return;
    }

    // Asegurar que el valor de inicio sea menor que el valor de fin
    if ($inicio > $fin) {
        echo "El número de inicio debe ser menor o igual al valor de fin.";
        return;
    }

    // Itero a través del rango y verifico cada número
    for ($numero = $inicio; $numero <= $fin; $numero++) {
        list($esPrimo, $paridad) = verificarNumero($numero);
        
        if ($esPrimo) {
            // Añado el número a la lista de todos los números primos
            $todosPrimos[] = $numero;
            
            // Clasificar el número primo como par o impar
            if ($paridad === "par") {
                $primosPares[] = $numero;
            } else {
                $primosImpares[] = $numero;
            }
        }
    }

    // Mostrar resultados por pantalla
    echo "Cantidad total de números primos encontrados: " . count($todosPrimos) . "<br>";
    echo "Cantidad de números primos pares: " . count($primosPares) . "<br>";
    echo "Cantidad de números primos impares: " . count($primosImpares) . "<br>";
    //print_r($todosPrimos);
    //print_r($primosPares);
    //echo "<br>";
    //print_r($primosImpares);
}

// Ejemplo de uso
$inicio = 1;
$fin = 88;
echo "Número de Inicio: " . ($inicio) . "<br>";
echo "Número de Fin: " . ($fin) . "<br>";
encontrarPrimosEnRango($inicio, $fin);
?>
