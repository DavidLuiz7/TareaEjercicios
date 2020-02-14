<?php
/**
 * Se crear un una función anónima de filtrado que aceptará elementos > $min
 *
 * Retorna un filtro sencillo fue de la familia de de filtros "mayores que n"
 */
function criterio_mayor_que($min)
{
    return function($elemento) use ($min) {
        return $elemento > $min;
    };
}

$entrada = array(1, 2, 3, 4, 5, 6);

// Use array_filter sobre una entrada con una función de filtro seleccionada
$salida = array_filter($entrada, criterio_mayor_que(4));

print_r($salida); // elementos > 3
