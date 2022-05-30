<?php

$numero = rand(1, 10);

switch ($numero) {
    case 1:
    case 2:
    case 3:
    case 4: print("La nota es $numero --> Insuficiente.");
        break;
    case 5: print("La nota es $numero --> Suficiente.");
        break;
    case 6: print("La nota es $numero --> Bien.");
        break;
    case 7: 
    case 8: print("La nota es $numero --> Notable.");
        break;
    case 9:
    case 10: print("La nota es $numero --> Sobresaliente.");
        break;
    default: print("La nota es incorrecta")
}
?>