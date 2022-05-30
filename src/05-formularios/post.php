<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";


//Recuperamos los datos del formulario
$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];

//Comprobamos si los parámetros están vacíos o no
if (empty ($nombre)){
    echo "El nombre está vacío";
    echo "<br/>";
    echo "<a href=\"ejercicio-2.php\">Volver al formulario</a>";
    exit;
}

if (empty ($apellido1)){
    echo "El apellido1 está vacío";
    echo "<br/>";
    echo "<a href=\"ejercicio-2.php\">Volver al formulario</a>";
    exit;
}

if (empty ($apellido2)){
    echo "El apellido2 está vacío";
    echo "<br/>";

}

echo "Nombre: $nombre";
echo "<br/>";
echo "Apellido1: $apellido1";
echo "<br/>";
echo "Apellido2: $apellido2";
echo "<br/>";

?>