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

$maximo = $numeros[0];
$pos_maximo = 0;

for ($i=1; $i < NUM_ELEMENTS; $i++) { 
    if ($maximo < $numeros[$i]) {
        $maximo = $numeros[$i];
        $pos_maximo = $i;
    }
}

echo "El número más alto es $maximo <br>";
echo "La posición del valor máximo es $pos_maximo";

?>