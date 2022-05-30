<?php

$productos = array("Disco SSD", "Memoria RAM", "Monitor");

echo "<pre>";
print_r($productos);
echo "</pre>";

echo "Número de elementos: ";
echo count($productos);
echo "<br/><br/>";

#Para mejorar la optimización es recomendable asignar el count a una variable 
#para evitar que haga el conteo en cada vuelta del bucle.
$numero_de_elementos = count($productos);

for ($i=0; $i < $numero_de_elementos; $i++) { 
    echo "Posición: $i - $productos[$i]";
    echo "<br>";
}

?>