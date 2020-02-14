<?php
$entrada = array(1, 2, 3, 4, 5, 6);

// Crea una nueva función anónima y la asigna a una variable
$filtro_inclusivo = function($elemento) {
    return(($elemento % 2) == 0);
};

// La función interna array_filter acepta ambos, data y la función
$retorno = array_filter($entrada, $filtro_inclusivo);

// La función NO necesita ser asignada a una variable. Esto es válido también:
$retorno = array_filter($entrada, function($elemento) {
    return(($elemento % 2) == 0)
});

print_r($retorno);