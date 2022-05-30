<?php
/*
echo "<pre>";
print_r($_GET);
echo "</pre>";
*/

//Recuperamos los datos del formulario
$nombre = $_GET["nombre"];
$apellido1 = $_GET["apellido1"];
$apellido2 = $_GET["apellido2"];

//Comprobamos si los parámetros están vacíos o no
if (empty ($nombre)){
    echo "El nombre está vacío";
    echo "<br/>";
    echo "<a href=\"ejercicio-1.php\">Volver al formulario</a>";
    exit;
}
//Con empty validamos si la variable está vacia y con exit salimos si ese es el caso
if (empty ($apellido1)){
    echo "El apellido1 está vacío";
    echo "<br/>";
    echo "<a href=\"ejercicio-1.php\">Volver al formulario</a>";
    exit;
}

if (empty ($apellido2)){
    echo "El apellido2 está vacío";
}

echo "Nombre: $nombre";
echo "<br/>";
echo "Apellido1: $apellido1";
echo "<br/>";
echo "Apellido2: $apellido2";
?>