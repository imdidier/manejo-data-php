<?php


//Comillas simples

//Ejemplo 1
echo 'Un texto de una línea';

$name = 'Didier';
echo "mi nombre es : " .$name . "<br>";

//Ejemplo 2
$cursos = [
    'backend' => [
        'php',
        'node',
    ]
];


echo "{$cursos['backend'][0]}";

//Ejemplo 3
class User {

  public  $lastname = 'Junco';

}

$User = new User;

echo $User->lastname;

//Ejemplo 3
$cargo = 'programador';
$programador = 'Junco';

echo "$cargo es ${programador}";