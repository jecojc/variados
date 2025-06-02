<?php
require 'funciones.php';

assert(sumar(2,3)===4," 2+ 3 deberia ser 5");
assert(esPar(4)===true," 4 deberia ser par");

echo "todas las funciones pasaron \n";

/*
function probar($descripcion, $condicion, $mensajeError) {
    if (!$condicion) {
        echo "X FALLÓ: $descripcion - $mensajeError\n";
    } else {
        echo "PASÓ: $descripcion\n";
    }
}

require 'funciones.php';

// Pruebas
probar("Suma 2+3=5", sumar(2, 3) === 5, "2 + 3 debería ser 5");
probar("4 es par", esPar(4) === true, "4 debería ser par");

*/
?>