<?php
// Include, si no existe continua sin errores
#include"funciones.php";
//Require, finaliza si no encuentra el archivo
require "funciones.php";

// Llamamos a las funciones
hola_mundo();
echo "<br>";
echo "<br>";
$c = suma(rand(1, 10), rand(1, 10));
echo "Suma: $c";
echo "<br>";
echo "<br>";
imprimir_tabla_multiplicar(rand(1, 10));

?>