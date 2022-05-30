<?php

#Definimos una contante para el número de elementos.
define("NUM_ELEMENTS", 10);

#Definimos un array
$temperaturas = array();

#Inicializamos un array con valores aleatorios
for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    $temperaturas[$i] = rand(1, 30);
}

#Imprimimos el array con un bucle for
echo "<h1>Array desordenado</h1>";
echo "<ul>";
for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    echo "<li>$temperaturas[$i]</li>";
}
echo "</ul>";

sort($temperaturas);

#Imprimimos el array con un bucle for
echo "<h1>Array ordenado ascendente</h1>";
echo "<ul>";
for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    echo "<li>$temperaturas[$i]</li>";
}
echo "</ul>";

rsort($temperaturas);

#Imprimimos el array con un bucle for
echo "<h1>Array ordenado descendente</h1>";
echo "<ul>";
for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    echo "<li>$temperaturas[$i]</li>";
}
echo "</ul>";

?>