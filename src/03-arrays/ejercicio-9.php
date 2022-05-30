<?php

//Definimos un array y lo inicializamos
$alumnos = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

//Ordenamos los VALORES del array de menor a mayor
asort($alumnos);

//Imprimimos el array
echo "<h1>Array ordenado de menor a mayor por valor</h1>";
echo "<pre>";
print_r($alumnos);
echo "</pre>";

//Ordenamos los CLAVES del array de menor a mayor
ksort($alumnos);

//Imprimimos el array
echo "<h1>Array ordenado de menor a mayor por valor</h1>";
echo "<pre>";
print_r($alumnos);
echo "</pre>";

//Ordenamos los VALORES del array de mayor a menor
arsort($alumnos);

//Imprimimos el array
echo "<h1>Array ordenado de mayor a menor por valor</h1>";
echo "<pre>";
print_r($alumnos);
echo "</pre>";

//Ordenamos los CLAVES del array de menor a mayor
krsort($alumnos);

//Imprimimos el array
echo "<h1>Array ordenado de menor a mayor por valor</h1>";
echo "<pre>";
print_r($alumnos);
echo "</pre>";
?>