<?php

$contador = 0;


while ( $contador < 10){

    echo "Contador: $contador <br>";

    $x = 0;

    while ($x < 20) {
        echo "Contador interno: $x <br>";
        

        $x ++;
    }


$contador ++;
}