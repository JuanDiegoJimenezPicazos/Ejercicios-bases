<?php

$lados = rand(1, 6);

if ($lados == 1) {
    print("<img src='media/Dice-1-b.svg'>");
} elseif ($lados == 2) {
    print("<img src='media/Dice-2-b.svg'>");
} elseif ($lados == 3) {
    print("<img src='media/Dice-3-b.svg'>");
} elseif ($lados == 4) {
    print("<img src='media/Dice-4-b.svg'>");
} elseif ($lados == 5) {
    print("<img src='media/Dice-5-b.svg'>");
} else {
    print("<img src='media/Dice-6-b.svg'>");
}
?>

