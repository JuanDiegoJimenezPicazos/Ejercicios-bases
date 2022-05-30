<?php
// Definimos la función
function hola_mundo(){
    echo "Hola mundo";
}

function suma($a, $b){
    return $a + $b;
}

function imprimir_tabla_multiplicar($numero)
{

    print("<table border=\"1\">");

for ($i=1; $i <= 10 ;+$i++) { 
    $resultado = $numero * $i;

    print("<tr>");
    print("<td>$numero</td>");
    print("<td>x</td>");
    print("<td>$i</td>");
    print("<td>=</td>");
    print("<td>$resultado</td>");
    print("</tr>");
}
print("</table>");

}

?>