<?php

//Funciones con argumentos

//Ejemplo 1 Valores
function Saludo ($name){

    return "Hola, $name";
}

echo Saludo("Jose");

//Ejemplo 2 referencias

$valor = 'php';
function AsigValor (&$valor){

 $valor = 'laravel';

 echo $valor;

}

AsigValor($valor);

//Ejemplo 3 predeterminado

function Abc($moto = 150){

    return $moto;
}

echo Abc();