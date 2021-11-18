<?php

$x = 4;

while ($x < 30){

    echo "Executando o loop $x <br>";

    if($x === 24){
        echo "Terminando o contador <br>";
        break;
    }

 $x = $x + 2;
}

echo "Fim do loop <br>";