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
echo "<h1>Temperaturas con bucle for</h1>";
echo "<ul>";
for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    echo "<li>$numeros[$i]</li>";
}
echo "</ul>";

$minimo = $numeros[0];
$pos_minimo = 0;

for ($i=1; $i < NUM_ELEMENTS; $i++) { 
    if ($minimo > $numeros[$i]) {
        $minimo = $numeros[$i];
        $pos_minimo = $i;
    }
}

$maximo = $numeros[0];
$pos_maximo = 0;

for ($i=1; $i < NUM_ELEMENTS; $i++) { 
    if ($maximo < $numeros[$i]) {
        $maximo = $numeros[$i];
        $pos_maximo = $i;
    }
}

$media = 0.0;

for ($i=0; $i < NUM_ELEMENTS; $i++) {
 $media = $media + $numeros[$i];
}
$media = $media / NUM_ELEMENTS;

echo "El número más bajo es $minimo <br>";
echo "La posición del valor mínimo es $pos_minimo <br>";
echo "El número más alto es $maximo <br>";
echo "La posición del valor máximo es $pos_maximo <br>";
echo "La media de las temperaturas es $media grados. <br>";

?>