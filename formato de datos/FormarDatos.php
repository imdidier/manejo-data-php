<?

//Formatear datos

//Ejemplo 1 Alterar Hacer un texto en minuscula y mayuscula

$text = "<h1>PHP es UN LENGUAJE</h1>";

echo strtolower($text);
echo strtoupper($text);

//Ejemplo 2 Convierte el primer elemento en minuscula y el primer elemento en Mayuscula

echo lcfirst($text);
echo ucfirst($text);

echo "<br><br>";

//Ejemplo 3 Reemplazamos cada espacio vacio por un guión(-)
$slug = str_replace(' ', '-', $text);
echo $slug;
echo strtolower($slug);

echo "<br><br>";

#ELEMENTOS MONOBYTES Y MULTIBYTES.
$text_uno = "PHP es UN LENGUAJE, año 2020, programación";
$text_dos = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text_uno); //monobye
echo "<br>";
//Al colocar mb_nombrefuncion con esto formateamos correctamente.
echo mb_strtoupper($text_dos);//multibyte