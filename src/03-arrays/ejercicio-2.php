<?php

#Definimos una contante para el número de elementos.
define("NUM_ELEMENTS", 10);

#Definimos un array
$numeros = array();

#Inicializamos un array con valores aleatorios
for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    $numeros[$i] = rand(1, 30);
}

#Imprimimos el array con un bucle for
echo "<h1>Array con un bucle for</h1>";
echo "<ul>";
for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    echo "<li>$numeros[$i]</li>";
}
echo "</ul>";

$suma = 0;
foreach($numeros as $valor){
    $suma = $suma + $valor;
}

$media = $suma / NUM_ELEMENTS;

echo "La media es $media";

?>